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

use App\Http\Controllers\HomeController;


// Frontend side..............................................
Route::get('/', 'HomeController@index');


//Show Product by category
Route::get('/show_product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/show_product_by_manufacture/{category_id}','HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}','HomeController@product_details_by_id');

//Cart Routes
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_cart');
Route::post('/update-cart','CartController@update_cart');

//Checkout Routes
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');


Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_detaisl');










//Backend...........................................................
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/logout', 'SuperAdminController@logout');

Route::post('/admin-dashboard', 'AdminController@dashboard');


//Category..................................................................

Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');

Route::get('/unactive_category/{category_id}', 'CategoryController@unactive_category');
Route::get('/active_category/{category_id}', 'CategoryController@active_category');
Route::get('/edit_category/{category_id}', 'CategoryController@edit_category');
Route::post('/update-category/{category_id}', 'CategoryController@update_category');
Route::get('/delete_category/{category_id}', 'CategoryController@delete_category');


//Manufacture or Brand Route .................................................................

Route::get('/add-manufacture', 'ManufactureController@index');
Route::get('/all-manufacture', 'ManufactureController@all_manufacture');


Route::post('/save-manufacture', 'ManufactureController@save_manufacture');
Route::get('/delete_manufacture/{manufacture_id}', 'ManufactureController@delete_manufacture');
Route::get('/unactive_manufacture/{manufacture_id}', 'ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}', 'ManufactureController@active_manufacture');
Route::get('/edit_manufacture/{manufacture_id}', 'ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}', 'ManufactureController@update_manufacture');



//Product Route .................................................................
Route::get('/add-product', 'ProductController@index');
Route::get('/all-product', 'ProductController@all_product');
Route::post('/save-product', 'ProductController@save_product');

Route::get('/delete_product/{product_id}', 'ProductController@delete_product');
Route::get('/unactive_product/{product_id}', 'ProductController@unactive_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');


//Slider Routes...........................................................

Route::get('/add-slider', 'SliderController@index');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('/all-slider', 'SliderController@all_slider');

Route::get('/delete_slider/{slider_id}', 'SliderController@delete_slider');
Route::get('/unactive_slider/{slider_id}', 'SliderController@unactive_slider');
Route::get('/active_slider/{slider_id}', 'SliderController@active_slider');
