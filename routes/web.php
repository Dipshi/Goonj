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
 //Route::group(['prefix'=>'eshopper'], function() {
 Route::get('/','ShopController@returnitems' );
 
//  Route::get('/','PagesController@index' );
Route::resource('/product-details', 'ProductDetails', ['except' => ['product']]);

//  Route::get('/product-details','ProductDetails@product' );
 Route::get('/','PagesController@index' );
//  Route::get('/product-details','ProductDetailsController@product' );
 Route::get('/addToCart/{id}','ProductDetailsController@addToCart' );
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
 Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
 Route::get('auth/google/callback', 'LoginController1@handleProviderCallback');
 Route::get('/logout','SessionController@logout' );
