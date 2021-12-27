<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\ProductController ;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view("/inscription" , "inscription"); 
Route::post("/login" , [UserController::class, 'login']); 
Route::post("/inscription" , [UserController::class, 'inscription']); 
Route::get("/" , [ProductController::class, 'index']);
Route::get("/details/{id}" , [ProductController::class, 'detailes']);
Route::post("/add_to_cart" , [ProductController::class, 'addtocart']);
Route::get("/cartList" , [ProductController::class, 'CartList']);
Route::get("/sup/{id}" , [ProductController::class, 'supProduits']);
Route::get("/confirmation" , [ProductController::class, 'confirm']);
Route::post("/orderplace" , [ProductController::class, 'orderPlace']);
Route::get("/ordersP" , [ProductController::class, 'orderF']);




