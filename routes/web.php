<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoogleController;
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

//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//books_list
Route::get('/', [BookController::class, 'index']);

Auth::routes();

//book details
Route::get('/book_detail/{id}', [BookController::class, 'book_details'])->name('display_book_details');

//category
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/categoryDetail/{id}', [CategoryController::class, 'category_details',])->name('display_category_details');

//Google Login
Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google_login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('google_callback');
