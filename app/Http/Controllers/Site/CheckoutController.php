<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Profile;
use App\Models\Store;
use App\Models\User;
use App\Models\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->user()->id)->first();
        $items = OrderItem::where('order_id',$orders->id)->get();

        $profiles = Profile::first();
        $stores = Store::first();
        $categories = Category::first();
        $users = User::first();
        return view('site.cart.checkout',compact('orders','profiles','stores','categories','users','items'));

    }//end of index

}
