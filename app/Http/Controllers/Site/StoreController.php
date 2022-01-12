<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderStatus;
use App\Models\Product;

class StoreController extends Controller
{

    public function index(){
        $stores = Store::all();
        return view('site.stores.stores',compact('stores'));

    }


    public function store(Request $request)
    {
        $store = Store::create([

            'store_name' => $request->store_name,
            'store_type' => $request->store_type,
            'store_phone' => $request->store_phone,
            'store_governorate' => $request->store_governorate,
            'store_city' => $request->store_city,
            'store_address' => $request->store_address,
            'store_email' => $request->store_email,
            'store_description' => $request->store_description,
            'shipping_price' => $request->shipping_price,
            'shipping_period' => $request->shipping_period,
            // 'store_logo_image' => $request->store_logo_image,
            // 'store_cover_image' => $request->store_cover_image,
            'user_id' =>  auth()->user()->id,
            'profile_id' => auth()->user()->id,

        ]);
        return redirect()->back();
    }



    public function getStoreOrders(){

        
        $store_orders = OrderItem::all();

        $stores = Store::first();

        return view('site.myStore.storeOrders',compact('store_orders','stores'));

    }
}
