<?php

use App\Http\Controllers\AppController;
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

Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('/home', [AppController::class, 'index'])->name('home');
Route::get('/book/{book}', [AppController::class, 'bookDetail'])->name('detail');

Route::get('/category/{cat}', [AppController::class, 'category'])->name('category');

Route::get('/publisher', [AppController::class, 'publishers'])->name('publisher');
Route::get('/publisher/{pub}', [AppController::class, 'publisher_detail'])->name('pub_detail');

Route::get('/contact', [AppController::class, 'contact'])->name('contact');