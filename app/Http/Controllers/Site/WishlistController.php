<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;

class WishlistController extends Controller
{
    public function index(){
        
        $all_product = auth()->user()->favouritelist()->latest()->get();
        $stores = Store::first();

        return view('site.wishlist.index', compact('all_product','stores'));
    }


    public function store(){

        if (! auth()->user()->favouritelistHas(request('productId'))) {
            auth()->user()->favouritelist()->attach(request('productId'));
            return response() -> json(['status' => true , 'favourited' => true]);
        }
        return response() -> json(['status' => true , 'favourited' => false]);  

    }

    public function destroy()
    {
        auth()->user()->favouritelist()->detach(request('product_id'));
    }

    public function countFav(){
        $countfavprod = auth()->user()->favouritelist()->count();
        return response()->json(['count'=>$countfavprod]);
    }
}
