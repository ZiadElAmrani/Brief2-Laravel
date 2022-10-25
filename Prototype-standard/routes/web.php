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

/* Route::get('promotion/{id}/edit', [ PromotionsController::class, 'edit_promotion' ])->name('edit-promotion');

Route::post('promotion/{id}/edit', [ PromotionsController::class, 'update_promotion' ])->name('update-promotion'); */

Route::get('promotion/delete', [ PromotionsController ::class, 'delete_promotion' ])->name('delete-promotion');

Route::get('search_prom',  [PromotionsController ::class, 'search_prom']);