<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/',[PageController::class,'index'])->name('index');
Route::middleware(['auth'])->group(function(){
    Route::get('/admin',function(){
        return view('admin.index');
    })->name('adminIndex');
    Route::get('admin/product/',[ProductController::class,'index'])->name('adminProductIndex');
    Route::get('admin/product/create',[ProductController::class,'create'])->name('adminProductCreate');
    Route::get('admin/product/edit/{product}',[ProductController::class,'edit'])->name('adminProductEdit');

    Route::get('admin/category/',[CategoryController::class,'index'])->name('adminCategoryIndex');
    Route::get('admin/category/create',[CategoryController::class,'create'])->name('adminCategoryCreate');
    Route::post('admin/category/',[CategoryController::class,'store'])->name('adminCategoryStore');
    Route::delete('admin/category/{category}',[CategoryController::class,'destroy'])->name('adminCategoryDelete');
    Route::get('admin/category/{category}/edit',[CategoryController::class,'edit'])->name('adminCategoryEdit');
    Route::patch('admin/category/{category}',[CategoryController::class,'update'])->name('adminCategoryUpdate');

    Route::get('admin/user/',[UserController::class,'index'])->name('adminMemberIndex');
    Route::post('admin/user/setRole',[UserController::class,'setRole'])->name('adminMemeberSetRole');

    Route::get('admin/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('adminLogout');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
