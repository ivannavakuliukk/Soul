<?php

use App\Http\Controllers\main_controller;
use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\registration_controller;

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

Route::get('/', [main_controller::class, 'main']);

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basket_place');
Route::post('/basket/confirm', [BasketController::class, 'basketConfirm'])->name('basket_confirm');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket_add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket_remove');

Route::get('/review', [main_controller::class, 'review'])->name('review');
Route::post('/review/check', [main_controller::class, 'review_check']);

Route::get('/catalog', [main_controller::class, 'catalog']);
Route::get('/search', [main_controller::class, 'search'])->name('search');
Route::get('{product?}', [main_controller::class, 'product'])->name('product');
Route::get('/choose/sizes', [main_controller::class, 'size']);
Route::get('/catalog/{category?}', [main_controller::class, 'category']);
Route::get('/catalog/color/{color?}', [main_controller::class, 'color']);