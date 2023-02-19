<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');


// rotte per i libri
Route::get('/book/create', [BookController::class, 'createBook'])->name('createBook');
Route::post('/book/store', [BookController::class, 'storeBook'])->name('storeBook');
Route::get('/book/index', [BookController::class, 'indexBook'])->name('indexBook');