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
//Route::get('/admin/product/list-product', [ProductController::class, 'index'])->name('admin.productList');
        

/**
 * 
 * nhóm route cho admin
 * 
 */
Route::post('updatedata/{id_product}','App\Http\Controllers\ProductController@update')->name('updatedata');
Route::get('delete/{id}','App\Http\Controllers\ProductController@destroy')->name('delete');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.home');
    });
    Route::get('dashboard', function () {
        return view('admin.pages.home');
    })->name('admin.dashboard');

    // route user
    Route::prefix('user')->group(function () {

        Route::get('user-list', function () {
            return view('admin.pages.user.userList');
        })->name('admin.userList');

        Route::get('user-profile', function () {
            return view('admin.pages.user.profile');
        })->name('admin.userProfile');
    });
    
    //route category
    Route::prefix('category')->group(function () {

        Route::get('main-category', function () {
            return view('admin.pages.category.mainCategory');
        })->name('admin.mainCate');
        
        Route::get('sub-category', function () {
            return view('admin.pages.category.subCategory');
        })->name('admin.subCate');
    });
    
    // route product
    Route::prefix('product')->group(function () {

        Route::get('add', function () {
            return view('admin.pages.product.addProduct');
        })->name('admin.addProduct');

       // Route::get('edit/{id_product}', 'App\Http\Controllers\ProductController@edit')->name('edit');
        Route::get('edit/{id_product}','App\Http\Controllers\ProductController@edit')->name('admin.product.edit');
        // Route::post('updatedata/{id}','App\Http\Controllers\ProductController@updatedata')->name('admin.product.updatedata');

        Route::get('list-product', 'App\Http\Controllers\ProductController@index')->name('admin.productList'); 

        Route::get('detail', function () {
            return view('admin.pages.product.productDetail');
        })->name('admin.productDetail');

    });

    // route order

    Route::prefix('order')->group(function () {
        Route::get('new-order', function () {
            return view('admin.pages.order.newOrder');
        })->name('admin.newOrder');

        Route::get('order-history', function () {
            return view('admin.pages.order.orderHistory');
        })->name('admin.orderHistory');

        Route::get('order-detail', function () {
            return view('admin.pages.order.orderDetail');
        })->name('admin.orderDetail');
    });
});

  