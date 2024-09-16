<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// Admin all controller 
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\SubCategoryController;

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
// Admin Controller 

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin' , 'Index')->name('admin');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('/category/list' , 'Index')->name('category.list');
    Route::get('/add/category' , 'AddCategory')->name('add.category');
    Route::post('/store/category' , 'StoreCategory')->name('store.category');
});

Route::controller(SubCategoryController::class)->group(function(){
    Route::get('/subcategory/list' , 'Index')->name('subcategory.list');
    Route::post('/store/subcategory' , 'StoreSubcategory')->name('store.subcategory');
});

Route::controller(AdminProductController::class)->group(function(){
    Route::get('/product/list' , 'Index')->name('product.list');
    Route::get('/add/product' , 'AddProduct')->name('add.product');
    Route::post('/store/product' , 'StoreProduct')->name('store.product');
});

// Web Controller
Route::controller(HomeController::class)->group(function(){
    Route::get('/' , 'Home')->name('home');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/product/view' , 'ProductView')->name('product.view');
    Route::get('/shop' , 'Shop')->name('shop');
});

require __DIR__.'/auth.php';
