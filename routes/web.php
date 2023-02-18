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

Route::get('/', [ProductController::class, 'Index'])->name('Home');
Route::get('/AddRouter', [ProductController::class, 'Add'])->name('Add');
Route::get('/UnavailableRouter', [ProductController::class, 'Unavailable'])->name('Unavailable');
Route::post('/EditRoute/{id}', [ProductController::class, 'Edit'])->name('Edit');
Route::post('/DetailsRoute/{id}', [ProductController::class, 'Details'])->name('Details');



Route::post('/SaveItemRoute', [ProductController::class, 'SaveProduct'])->name('SaveProduct');
Route::post('/UpdateProductRoute/{id}', [ProductController::class, 'UpdateProduct'])->name('UpdateProduct');
Route::post('/DeleteProductRoute/{id}', [ProductController::class, 'DeleteProduct'])->name('DeleteProduct');
Route::post('/AddQuantityRoute/{id}', [ProductController::class, 'AddQuantity'])->name('AddQuantity');
Route::post('/RemoveQuantityRoute/{id}', [ProductController::class, 'RemoveQuantity'])->name('RemoveQuantity');