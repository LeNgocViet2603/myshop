<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\RegisterController;
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
 */
// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return view('admin.pages.home');
//     });
//     Route::get('dashboard', function () {
//         return view('admin.pages.home');
//     })->name('admin.dashboard');

//     // route user
//     Route::prefix('user')->group(function () {

//         Route::get('user-list', function () {
//             return view('admin.pages.user.userList');
//         })->name('admin.userList');

//         Route::get('user-profile', function () {
//             return view('admin.pages.user.profile');
//         })->name('admin.userProfile');
//     });
    
//     //route category
//     Route::prefix('category')->group(function () {

//         Route::get('/main-category', [CategoryController::class , 'addCategory'])->name('admin.mainCate');

//         Route::post('/main-category', [CategoryController::class , 'postAddCategory']);

//         Route::get('/editCategory/{id}', [CategoryController::class, 'getEdit'])->name('admin.editCate');
//         Route::post('/updateCategory', [CategoryController::class, 'postEdit'])->name('admin.post-editCate'); // baomat

//         Route::get('/deleteCategory/{id}', [CategoryController::class, 'delete'])->name('admin.deleteCate');
        
//         Route::get('sub-category', function () {
//             return view('admin.pages.category.subCategory');
//         })->name('admin.subCate');
//     });
    
//     // route product
//     Route::prefix('product')->group(function () {

//         Route::get('/add', [ProductController::class, 'create'] )->name('admin.addProduct');
//         Route::post('/add', [ProductController::class, 'store'] );
        
//         // Route::get('list-product', function () {
//         //     return view('admin.pages.product.productList');
//         // })->name('admin.productList');

//        //Route::get('/admin/product/list-product', [ProudctController::class, 'index'])->name('admin.productList');;
//         Route::get('list-product', [ProductController::class , 'index'])->name('admin.productList'); 

//         Route::get('detail/{id}', [ProductController::class, 'show'])->name('admin.productDetail');
//         // Route::get('detail', function () {
//         //     return view('admin.pages.product.productDetail');
//         // })->name('admin.productDetail');

//     });

//     // route order

//     Route::prefix('order')->group(function () {
//         Route::get('new-order', function () {
//             return view('admin.pages.order.newOrder');
//         })->name('admin.newOrder');

//         Route::get('order-history', function () {
//             return view('admin.pages.order.orderHistory');
//         })->name('admin.orderHistory');

//         Route::get('order-detail', function () {
//             return view('admin.pages.order.orderDetail');
//         })->name('admin.orderDetail');
//     });
    
// });
Route::get('admin/register',[RegisterController::class,'showRegister'])->name('admin.showRegister');
Route::post('admin/add-new-regis',[RegisterController::class,'register'])->name('admin.register');
Route::get('admin/login',[LoginController::class,'showLogin'])->name('login');
Route::get('admin/logout',[LoginController::class,'logout'])->name('logout');
// Route::get('admin/user-list',[UserController::class,'index'])->name('admin.user');
Route::post('admin/authen',[LoginController::class,'auth'])->name('admin.authen');

Route::group(['middleware' => 'auth','prefix' => 'admin'],function (){
    Route::get('dashboard',[HomeController::class,'index'])->name('admin.dashboard');
    
    // route user
    Route::prefix('user')->group( function (){
        Route::get('user-list',[UserController::class,'index'])->name('admin.userList');
        Route::get('user-profile',[UserController::class,'showProfile'])->name('admin.userProfile');
    });


    Route::get('/', function () {
        return view('admin.pages.home');
    });
    Route::get('dashboard', function () {
        return view('admin.pages.home');
    })->name('admin.dashboard');

    // // route user
    // Route::prefix('user')->group(function () {

    //     Route::get('user-list', function () {
    //         return view('admin.pages.user.userList');
    //     })->name('admin.userList');

    //     Route::get('user-profile', function () {
    //         return view('admin.pages.user.profile');
    //     })->name('admin.userProfile');
    // });
    
    //route category
    Route::prefix('category')->group(function () {

        Route::get('/main-category', [CategoryController::class , 'addCategory'])->name('admin.mainCate');

        Route::post('/main-category', [CategoryController::class , 'postAddCategory']);

        Route::get('/editCategory/{id}', [CategoryController::class, 'getEdit'])->name('admin.editCate');
        Route::post('/updateCategory', [CategoryController::class, 'postEdit'])->name('admin.post-editCate'); // baomat

        Route::get('/deleteCategory/{id}', [CategoryController::class, 'delete'])->name('admin.deleteCate');
        
        Route::get('sub-category', function () {
            return view('admin.pages.category.subCategory');
        })->name('admin.subCate');
    });
    
    // route product
    Route::prefix('product')->group(function () {

        Route::get('/add', [ProductController::class, 'create'] )->name('admin.addProduct');
        Route::post('/add', [ProductController::class, 'store'] );
        
        // Route::get('list-product', function () {
        //     return view('admin.pages.product.productList');
        // })->name('admin.productList');

       //Route::get('/admin/product/list-product', [ProudctController::class, 'index'])->name('admin.productList');;
        Route::get('list-product', [ProductController::class , 'index'])->name('admin.productList'); 

        Route::get('detail/{id}', [ProductController::class, 'show'])->name('admin.productDetail');
        // Route::get('detail', function () {
        //     return view('admin.pages.product.productDetail');
        // })->name('admin.productDetail');

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
