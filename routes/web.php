<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\dashboardController;

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
//first page old code
// Route::get('/', function () {
//     return view('welcome');
// });
//first page new code
Route::get('/', function () {
    return view('first_home_page');
});


Auth::routes();
Route::group(['middleware'=>'auth'],function(){
//Nav bar Path
Route::get('/search',function(){
    return view('dashboard_item');
    });
Route::get('/contact',function(){
return view('dashboard_item');
});
Route::get('/category',function(){
    return view('dashboard_item');
    });
//DASHBOARD DATA SHOW ROUTE    
Route::get('/dashboard-item',[dashboardController::class,'show']);    
//LOGOUT ROUTE
// Route::get('/logout',function(){
//     return view('dashboard_item');
//     });
//UPDATE USER ROUTE
Route::get('/update-user',[UserController::class,'updateuser']);    
//SAVE UPDATE USER
Route::post('/save-update-item',[UserController::class,'saveupdateuser'])->name('saveupdateuser');    

//ITEM FIND
Route::post('/find-item',[itemController::class,'finditem']);
// ADD TO CART
Route::get('/cart-item/{id}',[itemController::class,'cartitem']);
// MY ORDER
Route::get('/my-order',[OrderController::class,'myorder']);
Route::post('/my-order',[OrderController::class,'placeorder']);
//CATEGORY WISE ITEM
Route::get('/category/{name}',[itemController::class,'categorywiseitem']);

Route::get('/test_nav',function(){
    return view('tets_nav');
});

});
//Admin route 
route::group(['middleware'=>'auth','middleware'=>'can:isAdmin'],function(){
//Add ITEM ROUTES    
Route::get('/add-item',function(){
    return view('add_item');
    });
Route::post('/add-item',[itemController::class,'additem']);
//DELETE ITEM ROUTE
Route::get('/delete-item/{id}',[itemController::class,'deleteitem']);
//UPDATE ITEM ROUTE
Route::get('/update-item/{id}',[itemController::class,'updateItem']);    
//SAVE UPDATE ITEM
Route::post('/save-update-item',[itemController::class,'saveupdateItem']);    
//CATEGORY WISE ITEM
//Route::get('/category/{name}',[itemController::class,'categorywiseitem']);
//Route::get('/category',[itemController::class,'categorywiseitem']);
//user list
Route::get('/user-list',[UserController::class,'userlist']);
Route::get('/orders',[OrderController::class,'orderlist']);
//UPDATE USER ROUTE
Route::get('/update-user/{id}',[UserController::class,'updateuser']);    
//SAVE UPDATE USER
Route::post('/save-update-item',[UserController::class,'saveupdateuser']);    
//DELETE USER
Route::get('/delete-user/{id}',[UserController::class,'deleteuser']);    

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
