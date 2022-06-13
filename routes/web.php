<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

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



Route::view('/','Include.layout');

//SHOW ALL PRODUCT
Route::get('/product/index',[ProductController::class,'index'])->name('product.index');

//ADD PRODUCT
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');

//STORE PRODUCT
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

//EDIT PRODUCT
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');

//UPDATE PRODUCT
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');

//DELETE PRODUCT
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');


//SHOW INVOICE
route::get('/invoice/create',[InvoiceController::class,'create'])->name('invoice.create');