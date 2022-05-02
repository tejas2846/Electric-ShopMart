<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
//Home Page
 Route::get('/', function () {
    return view('first_home_page');
});
Auth::routes();
  //DASHBOARD DATA SHOW ROUTE
  Route::get('/dashboard-item', [DashboardController::class, 'show'])->name('dashboard-item');
    
//Route for User
Route::group(['middleware' =>['auth','can:user']], function () {
//    //DASHBOARD DATA SHOW ROUTE
//    Route::get('/dashboard-item', [DashboardController::class, 'show'])->name('dashboard-item');

    Route::get('/contact', function () {
        return view('dashboard_item');
    });
    Route::get('/category', function () {
        return view('dashboard_item');
    });
   //UPDATE USER ROUTE
    Route::get('/update-user', [UserController::class, 'updateuser']);
    //SAVE UPDATE USER
    Route::post('/save-update-user', [UserController::class, 'saveupdateuser'])->name('saveupdateuser');
    //ITEM FIND
    Route::get('/find-item', [ItemController::class, 'finditem'])->name('finditem');
    // ADD TO CART
    Route::get('/order-item/{id}', [ItemController::class, 'orderitem']);
    // MY ORDER
    Route::get('/my-order', [OrderController::class, 'myorder']);
    Route::post('/my-order', [OrderController::class, 'placeorder']);
    //CATEGORY WISE ITEM
    Route::get('/category/{name}', [ItemController::class, 'categorywiseitem']);
    Route::get('/test_nav', function () {
        return view('tets_nav');
    });
    //RECEIVED ORDER
    Route::get('/receive-order/{name}', [OrderController::class, 'receivedrorder']);
    //cart route is here
    Route::get('/add-cart/{id}',[CartController::class,'addcart']);
    Route::get('/show-cart',[CartController::class,'showcart']);
    Route::get('/delete-cart/{id}',[CartController::class,'deletecart']);
});
//Admin route
route::group(['middleware' => 'auth', 'middleware' => 'can:isAdmin'], function () {
  
    //Add ITEM ROUTES
    Route::get('/add-item', function () {
        return view('item.add_item');
    });
    Route::post('/add-item', [ItemController::class, 'additem']);
    //DELETE ITEM ROUTE
    Route::get('/delete-item/{id}', [ItemController::class, 'deleteitem']);
    //UPDATE ITEM ROUTE
    Route::get('/update-item/{id}', [ItemController::class, 'updateItem']);
    //SAVE UPDATE ITEM
    Route::post('/save-update-item', [ItemController::class, 'saveupdateItem']);
    Route::get('/user-list', [UserController::class, 'userlist']);
    Route::get('/orders', [OrderController::class, 'orderlist']);
    //DELETE USER
    Route::get('/delete-user/{id}', [UserController::class, 'deleteuser']);
    //DELIVER ORDER
    Route::get('/deliver-order', [OrderController::class, 'deliverorder']);
    //PENDING ORDER
    Route::get('/pending-order', [OrderController::class, 'pendingorder']);
    //RECEIVED ORDER
    Route::get('/receive-order/{name}', [OrderController::class, 'receivedrorder']);
   
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
