<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/logout', function(){
    Auth::logout();
    return redirect(url('/'));
});

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/',[HomeController::class,'index']);
route::get('/product_list', [HomeController::class, 'product_list']);
route::get('/product_details/{id}',[HomeController::class,'product_details']);
route::get('/add_cart/{id}',[HomeController::class,'add_cart']);
route::get('/show_cart',[HomeController::class,'show_cart']);
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
route::get('/cash_order',[HomeController::class,'cash_order']);

route::post('/add_catagory',[AdminController::class,'add_catagory']);
route::get('/view_catagory',[AdminController::class,'view_catagory']);
route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);

route::post('/add_product',[AdminController::class,'add_product']);
route::get('/view_product',[AdminController::class,'view_product']);
route::get('/show_product',[AdminController::class,'show_product']); 
route::get('/delete_product/{id}',[AdminController::class,'delete_product']); 
route::get('/update_product/{id}',[AdminController::class,'update_product']); 
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::get('/view_dashboard',[AdminController::class,'view_dashboard']);

