<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [CategoryController::class, ('GetAll')]);

Route::get('/products/{a}',[ProductsController::class,('GetProductsByCategory')]);

Route::get('/detail-produk/{a}',[ProductsController::class,('GetProductByID')]);

Route::post('/AddToCarts/{a}',[ProductsController::class,('AddToCart')]);

Route::get('/cart',function(){
    return view('shopping-cart');
});
