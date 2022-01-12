<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function myStoreCategoryandproducts(Request $request)
    {
        $stores = Store::first();
        $categories = Category::all();
        return view('site.myStore.storeCategories',compact('stores','categories'));
    }


    Public function createCategory($id){
        
        $stores = Store::find($id);
        $categories = Category::first();

        return view('site.myStore.addCategory',compact('stores','categories'));
    }

    public function storeCategoriesInMyStore(Request $request){
       
        if ($request->hasFile('category_photo')) {

            $file = $request['category_photo'];
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = public_path('Uploads/categories');
            $file->move($path, $fileName);
        }
        $stores = Store::first();
        $categories = Category::create([

            'category_name' => $request->category_name,
            'store_id' => $request->store_id,
            'category_photo'       => $fileName,
        ]);
        return redirect()->route('store.storeCategories',$stores->id);    
    }

    public function editCategory($id){
        $category = Category::find($id);
        $stores = Store::first();
        return view('site.myStore.editCategories',compact('category','stores'));
    }

    public function updateCategory($id,Request $request)
    {

        $category = Category::find($id);

        if ($request->hasFile('category_photo')) {

            $file = $request['category_photo'];
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = public_path('Uploads/categories');
            $file->move($path, $fileName);
        }
        $stores = Store::first();
        $category->update([

            'category_name' => $request->category_name,
            'store_id' => $request->store_id,
            'category_photo'       => $fileName,
        ]);

        return redirect()->route('store.storeCategories',$stores->id);  
    }

    public function destroyCategoty($id){
        $category = Category::find($id);
        $stores = Store::first();

        $category->delete();
        return redirect()->route('store.storeCategories',$stores->id);

    }

    public function allcategories (Request $request){
        $categoryId = $request->category_id;


        $allcategories = Category::with('products')->get();
        $categories = Category::all();
    
        if ($categoryId) {
          $products = Category::with('products')->find($categoryId)->products;
        } else {
    
          $products = Product::all();
        }

        return view('site.categories.categories', compact('allcategories' , 'products'));
    }


    public function getProductByProce(Request $request){
            

        $products = Product::whereBetween('new_price',[$request->min_price,$request->max_price])->get();
        
        return view('site.categories.categories', compact('products'));
        
    }


    public function sortProducts(Request $request){
            
        $query = Product::orderBy('created_at','desc');

        
       
        if($request->sorting = '1' ){
            
             $query = Product::orderBy('created_at','desc');
          
        }

        if($request->sorting = '2' ){
            
             $query = Product::where('product_quantity','>=', 200);
          
        }
        $products = $query->paginate(6);

        
        return view('site.categories.categories', compact('products'));
        
    }
    
}
