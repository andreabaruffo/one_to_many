<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PublicController::class, 'home'])->name('homepage');
Route::get('/contacts', [PublicController::class,'contacts'])->name('contacts');

Route::post('/contacts/submit', [PublicController::class, 'submit'])->name('contacts.submit');
Route::get('/product/create', [ArticleController::class, 'create'])->name('product.create');
Route::post('/article/store', [ArticleController::class , 'store'])->name('article.store');
Route::get('/Article/create' , [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/detail{title}', [ArticleController::class, 'details'])->name('article.detail');
Route::get('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
// prima rotta di tipo put
Route::put('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
//prima rotta di tipo delete
Route::delete('/article/destroy/{article}', [ArticleController::class , 'destroy'])->name('article.delete');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/user/product/{user}', [ProductController::class, 'getProductByUser'])->name('user.product');
Route::get('/product/show/{product}', [ProductController::class , 'show'])->name('product.show');