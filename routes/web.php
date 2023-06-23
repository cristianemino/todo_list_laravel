<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

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

Route::get('/', [NotesController::class, 'index'])->name('index');
Route::get('/create', [NotesController::class, 'create'])->name('create');
Route::post('/create', [NotesController::class, 'store'])->name('store');
Route::get('/show/{id}', [NotesController::class, 'show'])->name('show');
Route::get('/edit/{id}', [NotesController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [NotesController::class, 'update'])->name('update');
Route::get('/delete/{id}', [NotesController::class, 'destroy'])->name('delete');
