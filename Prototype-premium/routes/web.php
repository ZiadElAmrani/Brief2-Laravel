<?php

use App\Http\Controllers\Promotion_Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------l-------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/promotions', [Promotion_Controller::class, 'index'])->name('index');

Route::get('/promotions/add', [Promotion_Controller::class, 'add_promotion'])->name('add-promotion');

Route::post('/promotions/add', [Promotion_Controller::class, 'insert_promotion'])->name('insert-promotion');

Route::get('promotion/{id}/edit', [Promotion_Controller::class, 'edit_promotion'])->name('edit-promotion');

Route::post('update/{id}', [Promotion_Controller::class, 'update_promotion'])->name('update-promotion');

Route::get('promotion/delete', [Promotion_Controller::class, 'delete_promotion'])->name('delete-promotion');

Route::get('search/{name}', [Promotion_Controller::class, 'search']);

Route::get('search', [Promotion_Controller::class, 'search']);
