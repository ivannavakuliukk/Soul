<?php

use App\Http\Controllers\main_controller;
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
Route::get('/review', [main_controller::class, 'review'])->name('review');
Route::post('/review/check', [main_controller::class, 'review_check']);
Route::get('/catalog', [main_controller::class, 'catalog']);
Route::get('/search', [main_controller::class, 'search'])->name('search');
Route::get('{product?}', [main_controller::class, 'product'])->name('product');
Route::get('/profile', [main_controller::class, 'profile']);
Route::get('/catalog/{category?}', [main_controller::class, 'category']);
Route::get('/catalog/color/{color?}', [main_controller::class, 'color']);