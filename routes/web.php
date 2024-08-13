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
    return view('backend.main');
});

Route::get("contact/", function(){
    return view("backend.Pages.contact");
});


Route::get("product", function() {
    return view("product.products");
});

Route::get("/category", [\App\Http\Controllers\CategoryController::class, "index"]);

Route::get("/category/create", [\App\Http\Controllers\CategoryController::class, "create"]);
Route::post("/category/store", [\App\Http\Controllers\CategoryController::class, "store"]);
Route::get("/category/edit/{id}", [\App\Http\Controllers\CategoryController::class, "edit"]);
Route::get("/category/delete/{id}", [\App\Http\Controllers\CategoryController::class, "destroy"]);
Route::post("/category/update/{id}", [\App\Http\Controllers\CategoryController::class, "update"]);


Route::get("/product/get", [\App\Http\Controllers\productController::class, "index"]);
Route::get("/product/form", [\App\Http\Controllers\productController::class, "maformho"]);
