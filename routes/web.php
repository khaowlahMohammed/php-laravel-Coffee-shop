<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Shopping;
use App\Http\Controllers\OrderController;


Route::get('/dashboard',[Dashboard::class,'index']);
Route::get('/products',[Dashboard::class,'products'])->name('products');
Route::post('/create_newproducts',[Dashboard::class,'create_newproducts'])->name('create_newproducts');
Route::get('/shoproductdata',[Dashboard::class,'shoproductdata'])->name('shoproductdata');
Route::get('/delete',[Dashboard::class,'delete'])->name('delete');

Route::get('/edit/{id}',[Dashboard::class,'edit'])->name('edit');
Route::get('/update',[Dashboard::class,'update'])->name('update');
Route::get('/showproduct_details',[Dashboard::class,'showproduct_details'])->name('showdet');
Route::post('/create_new_details',[Dashboard::class,'create_new_details'])->name('createnewdet');
Route::get('/',[Shopping::class,'index'])->name('index');

Route::get('/electric',[Shopping::class,'electric'])->name('electric');
Route::get('/coffee_cups', [Shopping::class, 'showCoffeeCups'])->name('coffee_cups');
Route::get('/coffee_beans', [Shopping::class, 'coffeeBeans'])->name('coffee_beans');
Route::get('/customers', [Dashboard::class, 'cous'])->name('customers');


Route::get('/productdetails/{id}',[Shopping::class,'productdetails'])->name('proddet');
Route::get('/add_to_cart',[Shopping::class,'add_to_cart'])->name('add_to_cart');


Route::get('/confirmation', [OrderController::class, 'showConfirmation'])->name('confirmation');
Route::post('/process_order', [OrderController::class, 'processOrder'])->name('process_order');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth');

Route::get('/success', function () {
    return view('shopping.success'); // عرض صفحة النجاح في مجلد 
})->name('success_page');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
