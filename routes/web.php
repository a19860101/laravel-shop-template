<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
Route::get('/admin',function(){
    return view('admin.index');
});
Route::get('admin/product/',[ProductController::class,'index'])->name('adminProductIndex');
Route::get('admin/product/create',[ProductController::class,'create'])->name('adminProductCreate');
Route::get('admin/product/edit/{product}',[ProductController::class,'edit'])->name('adminProductEdit');

Route::get('admin/category/',[CategoryController::class,'index'])->name('adminCategoryIndex');
Route::get('admin/category/create',[CategoryController::class,'create'])->name('adminCategoryCreate');
