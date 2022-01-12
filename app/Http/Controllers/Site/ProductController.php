<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
use App\Models\Product;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\add_product;

class ProductController extends Controller
{
    public function allProductsOfMyStore(){

        $stores = Store::first();
        $categories = Category::first();
        $products = Product::get();
        return view('site.productsOfMyStore.allProductsOfMyStore' ,compact('stores','categories','products'));
    }


    Public function createProductsInMyStore(){
        
        $categories = Category::all();
        $stores = Store::first();
        
        return view('site.productsOfMyStore.addProductToMyStore',compact('stores','categories'));
    }

    public function storeProductsInMyStore(Request $request){
       
        $stores = Store::first();
        $categories = Category::select('id')->get();

        if ($request->hasFile('image_one')){
            $imageName = $request->image_one->getClientOriginalName();
            $imageExt  = $request->image_one->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_one->move('Uploads/products' , $imageName);
            $image_one_value = $path ;
        }

        if ($request->hasFile('image_two')){
            $imageName = $request->image_two->getClientOriginalName();
            $imageExt  = $request->image_two->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_two->move('Uploads/products' , $imageName);
            $image_two_value = $path ;
        }

        if ($request->hasFile('image_three')){
            $imageName = $request->image_three->getClientOriginalName();
            $imageExt  = $request->image_three->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_three->move('Uploads/products' , $imageName);
            $image_three_value = $path ;
        }
        if ($request->hasFile('image_four')){
            $imageName = $request->image_four->getClientOriginalName();
            $imageExt  = $request->image_four->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_four->move('Uploads/products' , $imageName);
            $image_four_value = $path ;
        }


        if ($request->hasFile('image_five')){
            $imageName = $request->image_five->getClientOriginalName();
            $imageExt  = $request->image_five->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_five->move('Uploads/products' , $imageName);
            $image_five_value = $path ;
        }
        if ($request->hasFile('image_six')){
            $imageName = $request->image_six->getClientOriginalName();
            $imageExt  = $request->image_six->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_six->move('Uploads/products' , $imageName);
            $image_six_value = $path ;
        }

        if ($request->hasFile('image_seven')){
            $imageName = $request->image_seven->getClientOriginalName();
            $imageExt  = $request->image_seven->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_seven->move('Uploads/products' , $imageName);
            $image_seven_value = $path ;
        }
        if ($request->hasFile('image_eight')){
            $imageName = $request->image_eight->getClientOriginalName();
            $imageExt  = $request->image_eight->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_eight->move('Uploads/products' , $imageName);
            $image_eight_value = $path ;
        }


        if ($request->hasFile('image_nine')){
            $imageName = $request->image_nine->getClientOriginalName();
            $imageExt  = $request->image_nine->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_nine->move('Uploads/products' , $imageName);
            $image_nine_value = $path ;
        }

        if ($request->hasFile('image_ten')){
            $imageName = $request->image_ten->getClientOriginalName();
            $imageExt  = $request->image_ten->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_ten->move('Uploads/products' , $imageName);
            $image_ten_value = $path ;
        }
        if ($request->hasFile('image_eleven')){
            $imageName = $request->image_eleven->getClientOriginalName();
            $imageExt  = $request->image_eleven->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_eleven->move('Uploads/products' , $imageName);
            $image_eleven_value = $path ;
        }

        if ($request->hasFile('image_twelve')){
            $imageName = $request->image_twelve->getClientOriginalName();
            $imageExt  = $request->image_twelve->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_twelve->move('Uploads/products' , $imageName);
            $image_twelve_value = $path ;
        }
        if ($request->hasFile('image_therteen')){
            $imageName = $request->image_therteen->getClientOriginalName();
            $imageExt  = $request->image_therteen->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_therteen->move('Uploads/products' , $imageName);
            $image_therteen_value = $path ;
        }

        $product = Product::create([

            'product_name'        => $request->product_name,
            'product_quantity'    => $request->product_quantity,
            'old_price'           => $request->old_price,
            'new_price'           => $request->new_price,
            'percent_of_discount' => $request->percent_of_discount,
            'product_status'      => $request->product_status,
            'product_color'       => $request->product_color,
            'product_size'        => $request->product_size,
            'product_disc'        => $request->product_disc,
            'image_one'           => $image_one_value,
            'image_two'           => $image_two_value,
            // 'image_three'         => $image_three_value,
            // 'image_four'          => $image_four_value,
            // 'image_five'          => $image_five_value,
            // 'image_six'           => $image_six_value,
            // 'image_seven'         => $image_seven_value,
            // 'image_eight'         => $image_eight_value,
            // 'image_nine'          => $image_nine_value,
            // 'image_ten'           => $image_ten_value,
            // 'image_eleven'        => $image_eleven_value,
            // 'image_twelve'        => $image_twelve_value,
            // 'image_therteen'      => $image_therteen_value,
        ]);

        $product->categories()->attach($request->categories);



        $user = User::get();
        $product = Product::latest()->first();
        
        Notification::send($user, new \App\Notifications\add_product($product));


        return redirect()->route('allProducts.myStore',$stores->id); 
           
    }


    public function editProductInMyStore($id){
        
        $product = Product::find($id);
        $stores = Store::first();
        $categories = Category::get();

        return view('site.ProductsOfMyStore.editProducts',compact('product','stores','categories'));

    }

    public function updateProductInMyStore($id, Request $request){
       
        $stores = Store::first();
        $categories = Category::select('id')->get();
        $product = Product::find($id);

        if ($request->hasFile('image_one')){
            $imageName = $request->image_one->getClientOriginalName();
            $imageExt  = $request->image_one->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_one->move('Uploads/products' , $imageName);
            $image_one_value = $path ;
        }

        if ($request->hasFile('image_two')){
            $imageName = $request->image_two->getClientOriginalName();
            $imageExt  = $request->image_two->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_two->move('Uploads/products' , $imageName);
            $image_two_value = $path ;
        }

        if ($request->hasFile('image_three')){
            $imageName = $request->image_three->getClientOriginalName();
            $imageExt  = $request->image_three->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_three->move('Uploads/products' , $imageName);
            $image_three_value = $path ;
        }
        if ($request->hasFile('image_four')){
            $imageName = $request->image_four->getClientOriginalName();
            $imageExt  = $request->image_four->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_four->move('Uploads/products' , $imageName);
            $image_four_value = $path ;
        }


        if ($request->hasFile('image_five')){
            $imageName = $request->image_five->getClientOriginalName();
            $imageExt  = $request->image_five->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_five->move('Uploads/products' , $imageName);
            $image_five_value = $path ;
        }
        if ($request->hasFile('image_six')){
            $imageName = $request->image_six->getClientOriginalName();
            $imageExt  = $request->image_six->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_six->move('Uploads/products' , $imageName);
            $image_six_value = $path ;
        }

        if ($request->hasFile('image_seven')){
            $imageName = $request->image_seven->getClientOriginalName();
            $imageExt  = $request->image_seven->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_seven->move('Uploads/products' , $imageName);
            $image_seven_value = $path ;
        }
        if ($request->hasFile('image_eight')){
            $imageName = $request->image_eight->getClientOriginalName();
            $imageExt  = $request->image_eight->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_eight->move('Uploads/products' , $imageName);
            $image_eight_value = $path ;
        }


        if ($request->hasFile('image_nine')){
            $imageName = $request->image_nine->getClientOriginalName();
            $imageExt  = $request->image_nine->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_nine->move('Uploads/products' , $imageName);
            $image_nine_value = $path ;
        }

        if ($request->hasFile('image_ten')){
            $imageName = $request->image_ten->getClientOriginalName();
            $imageExt  = $request->image_ten->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_ten->move('Uploads/products' , $imageName);
            $image_ten_value = $path ;
        }
        if ($request->hasFile('image_eleven')){
            $imageName = $request->image_eleven->getClientOriginalName();
            $imageExt  = $request->image_eleven->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_eleven->move('Uploads/products' , $imageName);
            $image_eleven_value = $path ;
        }

        if ($request->hasFile('image_twelve')){
            $imageName = $request->image_twelve->getClientOriginalName();
            $imageExt  = $request->image_twelve->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_twelve->move('Uploads/products' , $imageName);
            $image_twelve_value = $path ;
        }
        if ($request->hasFile('image_therteen')){
            $imageName = $request->image_therteen->getClientOriginalName();
            $imageExt  = $request->image_therteen->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->image_therteen->move('Uploads/products' , $imageName);
            $image_therteen_value = $path ;
        }

        $product->update([

            'product_name'        => $request->product_name,
            'product_quantity'    => $request->product_quantity,
            'old_price'           => $request->old_price,
            'new_price'           => $request->new_price,
            'percent_of_discount' => $request->percent_of_discount,
            'product_status'      => $request->product_status,
            'product_color'       => $request->product_color,
            'product_size'        => $request->product_size,
            'product_disc'        => $request->product_disc,
            'image_one'           => $image_one_value,
            'image_two'           => $image_two_value,
            // 'image_three'         => $image_three_value,
            // 'image_four'          => $image_four_value,
            // 'image_five'          => $image_five_value,
            // 'image_six'           => $image_six_value,
            // 'image_seven'         => $image_seven_value,
            // 'image_eight'         => $image_eight_value,
            // 'image_nine'          => $image_nine_value,
            // 'image_ten'           => $image_ten_value,
            // 'image_eleven'        => $image_eleven_value,
            // 'image_twelve'        => $image_twelve_value,
            // 'image_therteen'      => $image_therteen_value,
        ]);

        $product->categories()->attach($request->categories);
        return redirect()->route('allProducts.myStore',$stores->id); 
           
    }

    public function destroyProduct($id){
        $product = Product::find($id);
        $stores = Store::first();
        $product->delete();
        return redirect()->route('allProducts.myStore',$stores->id); 
    }

    public function getProduct($id){
        
        $product = Product::find($id);
        $stores = Store::first();
        $categories = Category::first();
        $comment = Comment::first();
        $product_id = $product->id ;
        $product_categories_ids =  $product->categories->pluck('id');
        $related_products = Product::whereHas('categories',function ($cat) use($product_categories_ids){
            $cat-> whereIn('categories.id',$product_categories_ids);
        }) -> limit(20) -> latest() -> get();
        return view('site.productsOfMyStore.product',compact('product','stores','categories','related_products','comment'));
    }

    public function storeComment(Request $request)
    { 
        $comment = Comment::create([
            'user_name' => auth()->user()->profile->name,
            'profile_id'=> auth()->user()->id,

            'user_comment' => $request->text,
            'product_id' => $request->product_id,
        ]);
        $user = User::get();
        $comment = Comment::latest()->first();
        //$user->notify(new \App\Notifications\add_product($product));
        Notification::send($user, new \App\Notifications\add_comment($comment));
        return response()->json($comment);
    }





}
