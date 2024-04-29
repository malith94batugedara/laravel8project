<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-books',[BookController::class ,'create'])->name('book.create');

Route::post('/store-books',[BookController::class ,'store'])->name('book.store');

Route::get('/all-books',[BookController::class ,'index'])->name('book.index');
