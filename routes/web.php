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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');
/*
esta linea de codigo GENERA las rutas estandar para un CRUD
+--------+-----------+-------------------------+------------------+------------------------------------------------+--------------+
| Domain | Method    | URI                     | Name             | Action                                         | Middleware   |
+--------+-----------+-------------------------+------------------+------------------------------------------------+--------------+
|        | GET|HEAD  | /                       |                  | Closure                                        | web          |
|        | GET|HEAD  | api/user                |                  | Closure                                        | api,auth:api |
|        | POST      | products                | products.store   | App\Http\Controllers\ProductController@store   | web          |
|        | GET|HEAD  | products                | products.index   | App\Http\Controllers\ProductController@index   | web          |
|        | GET|HEAD  | products/create         | products.create  | App\Http\Controllers\ProductController@create  | web          |
|        | DELETE    | products/{product}      | products.destroy | App\Http\Controllers\ProductController@destroy | web          |
|        | PUT|PATCH | products/{product}      | products.update  | App\Http\Controllers\ProductController@update  | web          |
|        | GET|HEAD  | products/{product}      | products.show    | App\Http\Controllers\ProductController@show    | web          |
|        | GET|HEAD  | products/{product}/edit | products.edit    | App\Http\Controllers\ProductController@edit    | web          |
+--------+-----------+-------------------------+------------------+------------------------------------------------+--------------+


*/