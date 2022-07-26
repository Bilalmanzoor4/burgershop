<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('index');
});

Route::get ('/products_front',function () {
    return view('products_front');
});

Route::get ('/single_product', function () {
    return view('single_product');
});

Route::get ('/about', function () {
   return view('about');
});

Route::resource('products', ProductController::class);