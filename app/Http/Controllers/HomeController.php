<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Store;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::select('id', 'category_name')->get();

        // best sellings
        $items = DB::table('products')->select('product_quantity', DB::raw('COUNT(id) as count'))->groupBy('product_quantity')->orderBy('count', 'desc')->get();
        $product_ids = [];
        foreach ($items as $item) {
            array_push($product_ids, $item->product_quantity);
        }
        $best_sellings = Product::whereIn('id', $product_ids)->get();


        //new arrival
        $pros = Product::orderBy('id','desc')->get();


        //all stores//

        $stores = Store::paginate(3);
        return view('home', compact('categories', 'best_sellings' , 'pros','stores'));    }


   

}
