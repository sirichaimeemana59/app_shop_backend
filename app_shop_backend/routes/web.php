<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// User
Route::post('user_create_user','User\UserControllers@store');

// Shop
Route::get('user_create_shop','Shop\ShopControllers@store');
Route::get('user_create_shop_list','Shop\ShopControllers@index');
Route::get('user_create_product_list/{id?}','Shop\ShopControllers@show');

// Shop Product
Route::get('user_create_product','Product\ProductControllers@store');
Route::get('user_create_product','Product\ProductControllers@store');
