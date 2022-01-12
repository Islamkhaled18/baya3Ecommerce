<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/dd', function() {

    return Cart::content();
    
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
     

        Route::group(['namespace' => 'Site', 'middleware' => 'auth', 'prefix' => 'Site'], function () {


            Route::get('/profile/{id}', 'ProfileController@index')->name('profile.user');
            Route::get('/profile/delete/{id}', 'ProfileController@destroyProduct')->name('order.delete'); // delete my order
            Route::post('/profile/image', 'ProfileController@profilePhoto')->name('profile.photo'); //save photo
            Route::post('/profile/information','ProfileController@update')->name('user.information'); // update oue information
            Route::post('/profile/add-store','StoreController@store')->name('profile.addStore'); // add store by user
            Route::get('/storeProfile/{id}','StoreProfileController@index')->name('store.profile'); // manage my store
            Route::get('/storeProfile/edit/{id}','StoreProfileController@edit')->name('store.edit'); // edit my store page
            Route::post('/storeProfile/update/{id}','StoreProfileController@update')->name('store.update'); // update my store 
            Route::get('/storeProfile/delete/{id}', 'StoreProfileController@destroy')->name('store.delete'); //delete category

            ///// categories in my store //
            Route::get('/storeProfile/categories/{id}','CategoryController@myStoreCategoryandproducts')->name('store.storeCategories'); // categories of the store and products
            Route::get('/storeProfile/creareCategory/{id}','CategoryController@createCategory')->name('category.store.create'); //categories of store page
            Route::post('/storeProfile/creareCategory','CategoryController@storeCategoriesInMyStore')->name('store.categories'); // store categories of the store to display
            Route::get('/storeProfile/category/edit/{id}','CategoryController@editCategory')->name('category.edit'); //edit category page
            Route::post('/storeProfile/category/update/{id}', 'CategoryController@updateCategory')->name('category.update'); //update category
            Route::get('/storeProfile/categorydelete/{id}', 'CategoryController@destroyCategoty')->name('delete.category'); //delete category

            /// products in my store //
            Route::group(['prefix'=>'storeProfile'],function(){

                Route::get('/products/{id}','ProductController@allProductsOfMyStore')->name('allProducts.myStore'); //all products
                Route::get('/products/createProducts/{id}','ProductController@createProductsInMyStore')->name('Products.myStore.create'); // create product
                Route::post('/products/createProducts','ProductController@storeProductsInMyStore')->name('Products.myStore.store'); //store product
                Route::get('/products/editProduct/{id}','ProductController@editProductInMyStore')->name('products.editProduct'); //edit product
                Route::post('/products/updateProduct/{id}','ProductController@updateProductInMyStore')->name('products.updateProduct'); //update product
                Route::get('/products/deleteProduct/{id}', 'ProductController@destroyProduct')->name('products.destory'); //delete product
                Route::get('/products/singleProduct/{id}', 'ProductController@getProduct')->name('products.singleProduct'); //delete product
                Route::post('products_sendComment', 'ProductController@storeComment')->name('products.send.comment'); // write comment on product

                  //////////////////////////////////favouritelist //////////////////////////////////
                Route::post('favouritelist','WishlistController@store')->name('favourite.store'); //store product in favourite list
                Route::delete('favouritelist', 'WishlistController@destroy')->name('favourite.destroy');//destroy product in favourite list
                
                Route::get('favouritelist/products','WishlistController@index')->name('favouritelist.product.index');//show product in favourite list
                Route::get('count-fav-prod','WishlistController@countFav')->name('product.countFav');//scount product in favourite list

            });

             //////////////////////////////////Cart //////////////////////////////////////////////////////

            Route::post('add_cart','CartController@add_cart')->name('cart.add'); //store product in cart list
            Route::post('update_cart','CartController@update_cart')->name('cart.update'); //upate product in cart list
            Route::post('destroy_cart', 'CartController@destroy_cart')->name('cart.destroy'); //destroy product in cart list
            Route::get('cart','CartController@viewCart')->name('cart'); //view product in cart list
            Route::get('continue','CartController@continue')->name('cart.continue'); //go to checkout page
            //////////////////////////////////////////////////////////////////////////////////////////
            Route::get('checkout','CheckoutController@index')->name('checkout.index');
            Route::post('checkout', 'PaymentController@processPayment') -> name('payment.process');

            ////// all stores //
            Route::get('/allStores','StoreController@index')->name('store.allStores'); // all stores in website

            // Store Orders ///
            Route::get('StoreOrder/{id}','StoreController@getStoreOrders')->name('store.orders');


            // chat //

            Route::group(['prefix'=>'Chat'],function(){

                Route::get('/allChatMessages/{id}','ChatController@allUserMessageChat')->name('user.Chat');
                Route::get('/withStore/{id}','ChatController@chatWithStore')->name('user.chat.WithStore');
                Route::get('/StoreChats-WithUsers','ChatController@chatWithUsers')->name('store.chat.withUser');
                //Route::get('/withUser/{id}','ChatController@chatuser')->name('messages.users');
                //Route::post('/messages-withStores','ChatController@storeMessages')->name('message.store');

            });
            Route::post('/sendMessage', 'ChatController@store')->name('message.store'); //store chats in database
            

            Route::post('/search-result','SearchController@get')->name('search'); // search products

            Route::get('/Notifications','NotificationController@index')->name('notification'); // notifications page

            Route::get('/AllCategories', 'CategoryController@allcategories')->name('AllCategories'); //all categories with all products

            Route::get('/productsFilter','CategoryController@getProductByProce')->name('getProduct'); // filter products with proce range

            Route::get('/sortProducts','CategoryController@sortProducts')->name('sortProducts');




        });
    },
);
