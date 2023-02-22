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


// rotta parametrica per il dettaglio del singolo libro
Route::get('/book/{book}', [BookController::class, 'detailBook'])->name('detailBook');

// rotta parametrica per la modifica del singolo un libro
Route::get('/book/edit/{book}', [BookController::class, 'editBook'])->name('editBook');

Route::put('/book/update/{book}', [BookController::class, 'updateBook'])->name('updateBook');

