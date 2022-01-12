<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Redirect;

class StoreProfileController extends Controller
{
    public function index(Request $request)
    {
        $stores = Store::first();
        $orderitems = OrderItem::first();
        return view('site.myStore.storeProfile',compact('stores','orderitems'));
    }


    public function edit($id){

        $stores = Store::find($id)->first();
        return view('site.myStore.editMyStore',compact('stores'));

    }

    public function update($id,Request $request){

        $stores = Store::find($id)->first();
        
        $stores->update([

            'store_name' => $request->store_name,
            'store_type' => $request->store_type,
            'store_governorate' => $request->store_governorate,
            'store_city' => $request->store_city,
            'store_address' => $request->store_address,
            'store_phone' => $request->store_phone,
            'store_email' => $request->store_email,
            
        ]);

        return Redirect::back();

    }

    public function destroy($id){
        $store = Store::find($id)->first();

        $store->delete();
        return Redirect::back();


    }

}
