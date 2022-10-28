<?php

use App\Http\Controllers\Promotion_Controller;
use App\Http\Controllers\students_Controller;
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


Route::get('promotions', [Promotion_Controller::class, 'index'])->name('index');

Route::get('promotions/add', [Promotion_Controller::class, 'add_promotion'])->name('add-promotion');

Route::post('promotions/add', [Promotion_Controller::class, 'insert_promotion'])->name('insert-promotion');

Route::get('promotion/{id}/edit', [Promotion_Controller::class, 'edit_promotion'])->name('edit-promotion');

Route::post('update/{id}', [Promotion_Controller::class, 'update_promotion'])->name('update-promotion');

Route::get('promotion/delete', [Promotion_Controller::class, 'delete_promotion'])->name('delete-promotion');

Route::get('search/{name}', [Promotion_Controller::class, 'search']);

Route::get('search', [Promotion_Controller::class, 'search']);

Route::get('studentadd/{id}', [students_Controller::class, 'form_student']);

Route::post('studentstore', [students_Controller::class, 'studentstore']);

Route::get('student/{id}/edit', [students_Controller::class, 'student_edit']);

Route::post('student/{id}/update', [students_Controller::class, 'student_update']);

Route::get('student/{id}/delete', [students_Controller::class, 'student_delete']);