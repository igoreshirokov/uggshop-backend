<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('v1/categories', 'Catalog@get_categories');
Route::get('v1/{category_slug}', 'Catalog@get_products');
Route::get('v1/product/{product_slug}', 'Catalog@get_product');
// Route::get('v1/order/{product_slug}', 'Catalog@get_product');
Route::post('v1/order/add','OrderController@add_order');
// Route::get('v1/create_all_slugs', 'Catalog@create_all_slugs');
