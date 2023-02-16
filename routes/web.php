<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/AddRouter', [ProductController::class, 'Add'])->name('Add');
Route::post('/EditRoute/{id}', [ProductController::class, 'Edit'])->name('Edit');



Route::post('/saveItemRoute', [ProductController::class, 'saveProduct'])->name('saveProduct');
Route::post('/updateProductRoute/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');