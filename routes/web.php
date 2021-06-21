<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryGoodController;
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

Route::get('/', [CategoryGoodController::class, 'index'])->name('index');
Route::get('/category/{slug}', [CategoryGoodController::class, 'getGoodsByCategory'])->name('getGoodsByCategory');
Route::get('/category/{slug_category}/{slug_good}', [CategoryGoodController::class, 'getGood'])->name('getGood');
Route::get('/category/add', [CategoryGoodController::class, 'RequestCategory'])->name('RequestCategory');
Route::post('/category/add/check',[CategoryGoodController::class, 'RequestCategoryCheck']);
Route::get('/good/add', [CategoryGoodController::class, 'RequestGood'])->name('RequestGood');
Route::post('/good/add/check',[CategoryGoodController::class, 'RequestGoodCheck']);
