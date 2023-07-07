<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

// belajar route dengan callback
route::get('/helo', function() {
    return "Hello World";
});

// menjalankan yang ada di ProductController
Route::get('/product/display', [ProductController::class, 'showAll']); 
Route::post('/product/save', [ProductController::class, 'saveNew']);

// belajar route dengan controller
Route::get("/pintu-masuk", [TestController::class, 'pintuMasuk']);

Route::post("/pintu-masuk", [TestController::class, 'pintuMasuk']);

// route group
Route::group(["prefix"=>"/products"], function(){ 
    Route::get("/all", [ProductController::class, "all"]); 
    Route::get("/bag", [ProductController::class, "bag"]); 
    Route::get("/latest", [ProductController::class, "latest"]); 
    Route::get("/discounts", [ProductController::class, "discounts"]); 
});

// route group menggunakan middleware
Route::group(["prefix"=>"admin", "middleware"=>"mustAdmin"], function(){ 
    Route::get("/dashboard", [DashboardController::class, "index"]); 
    Route::get("/orders", [DashboardController::class, "index"]); 
// definisi route lainnya di sini 
}); 

// route view. tanpa controller
Route::view("/path", "welcome.view");