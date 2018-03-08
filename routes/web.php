<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('in');
// });
Route::group(['prefix'=>'eshopper'], function() {
 Route::get('/','PagesController@index' );
 Route::get('/product-details','ProductDetails@product' );
 Route::get('/login','LoginController@index' );
 Route::get('/checkout','CheckoutController@index' );
 Route::get('/cart','CartController@index' );
 Route::get('/contact-us', function () {
     return view('contact-us');
 });
 Route::get('/tp', function () {//trial page
    return view('index_productdisplay');
});
 Route::get('/shop','ShopController@index' );
});