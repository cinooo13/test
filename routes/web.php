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

Route::post("/login" , [UserController::class, 'login']); 
Route::get("/" , [ProductController::class, 'index']);
Route::get("/details/{id}" , [ProductController::class, 'detailes']);
Route::post("/add_to_cart" , [ProductController::class, 'addtocart']);




