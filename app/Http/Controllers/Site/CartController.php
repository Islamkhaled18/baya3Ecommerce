<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\Cart;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    public function add_cart(Request $request)
    {

        try {

            if (request()->ajax()) {

                $product_model = Product::FindOrFail($request->id);
                
                $product = Cart::add($product_model->id, $product_model->product_name, 1 , $product_model->new_price)
                    ->associate('App\Models\Product');

                $count    = Cart::count();
      

                return response()->json(['count' => $count]);

            }//end of if ajax

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of function add_cart

    
    public function viewCart()
    {
        $stores = Store::first();
        return view('site.cart.cart',compact('stores'));
    }





    public function update_cart(Request $request)
    {   

        try {

            if (request()->ajax()) {

                $product  = Cart::update($request->row_id, $request->quantity ,$request->price);

                $count    = Cart::count();
                $subtotal = Cart::subtotal();

                $currency = app()->getLocale() == 'ar' ? 'جنيه مصري' : 'EP';

                return response()->json(['product' => $product, 'count' => $count,'subtotal'=>$subtotal]);

            }//end of ajax

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of function update_cart


    public function destroy_cart(Request $request)
    {

        try {


            if (request()->ajax()) {

                Cart::remove($request->row_id);
                
                $count    = Cart::count();
                $subtotal = Cart::subtotal();

                return response()->json(['subtotal'=>$subtotal,'count' => $count]);

            }//end of ajax

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try
    
    }//end of function

    public function continue()
    {
        $profiles = Profile::first();
        if (Cart::count() > 0) {
            $order = Order::updateOrCreate([
                'user_id' => auth()->user()->id,
                'profile_id'=>$profiles->id,
                'total_price' => Cart::subtotal(),
            ]);
            foreach (Cart::content() as $product) {

                OrderItem::updateOrCreate([
                    'order_id'   => $order->id,
                    'product_id' => $product->model->id,
                    'quantity'   => $product->qty,
                    'profile_id'=>$profiles->id,
                    'price'      => $product->price,
                    'subtotal'   => $product->subtotal,
                    'user_id'    => auth()->user()->id,
                ]);  
            }//end of foreach
            Cart::destroy();
            return redirect()->route('checkout.index');
        } else {
            return redirect()->back();

        }//end of if

    }//end of send



}
