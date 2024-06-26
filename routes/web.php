<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientformController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('visitor')->group(function () {
    Route::get('/', [ProductController::class,'productHome']);
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
});




Route::get('/category', [CategoryController::class,'index']);
Route:: post('/category/store', [CategoryController::class,'store']);

Route::get('/products', [ProductController::class,'index']);
// Route::get('/categoty', [CategoryController::class,'index']);
Route:: post('/product/store', [ProductController::class,'store']);
Route:: delete('/product/destroy/{id}', [ProductController::class,'destroy']);
Route:: delete('/category/destroy/{id}', [CategoryController::class,'destroy']);
Route:: post('/update', [CategoryController::class,'update']);



Route::get('/order', [OrderController::class,'index']);
Route::get('/order/show', [OrderController::class,'show']);

Route::get('/users', [CategoryController::class,'index']);
Route:: post('/users/store', [CategoryController::class,'store']);


Route::get('/show', function () {
    return view('order.show');
});

Route::get('/card', function () {
    return view('card');
});


Route::get('/signup', function () {
    return view('/client.client');
});

Route::get('/product', function () {
    return view('/front.products');
});


// pageproducts
Route::get('/products', [ProductController::class,'index']);
Route::get('/product/show/{id}', [ProductController::class,'show']);
Route::get('/product/edit/{id}', [ProductController::class,'edit']);
Route::post('/product/update/{id}', [ProductController::class,'update']);
Route::post('/product/delete/{id}', [ProductController::class,'delete']);
Route::post('/product/store', [ProductController::class,'store']);

Route::post('/signuppop', [ClientformController::class,'indexclient']) ->name('indexclient');


Route::post('/client', [ClientformController::class,'clientsignin']) ->name('clientsignin');
// change lang
Route::get('lang/{lang}',[LangController::class,'changelang']);



