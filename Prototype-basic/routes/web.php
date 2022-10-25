<?php

use App\Http\Controllers\PromotionsController;
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


Route::get('/promotions', [ PromotionsController::class, 'index' ])->name('index');

Route::get('/promotions/add', [ PromotionsController::class, 'add_promotion' ])->name('add-promotion');

Route::post('/promotions/add', [ PromotionsController:: class, 'insert_promotion' ])->name('insert-promotion');