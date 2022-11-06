<?php

use App\Http\Controllers\promotions_controller;
use App\Http\Controllers\students_controller;
use App\Models\Promotion;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/index', [promotions_controller::class, 'create']);
Route::get('/form', [promotions_controller::class, 'insert_form'])->name('add_promotion');
Route::post('/insert', [promotions_controller::class, 'insert_data']);

Route::get('/edit_form/{id}', [promotions_controller::class, 'selectBy_id']);

Route::post('/edit/{id}', [promotions_controller::class, 'save_edit']);

//search

Route::get('/index_search', [promotions_controller::class, 'search_data']);
Route::get('/index_search/{name}', [promotions_controller::class, 'search_data']);

//delete promotion 
Route::get('/delet_promo/{id}', [promotions_controller::class, 'delet_promotion']);


//add student view
Route::get('/student_form/{id}', [students_controller::class, 'form_students'])->name('add_student');



// insert student 
Route::post('/insert_student', [students_controller::class, 'add_student']);

//show students list 
// Route::get('/index_students', [students_controller::class, 'show_students']);

// show edit student view
Route::get('/edit_student_form/{id}', [students_controller::class, 'edit_student_view']);

// save students modification

Route::post('/student_saved/{id}', [students_controller::class, 'update_student']);

// delete student

Route::get('/student_deleted/{id}', [students_controller::class, 'delete_student']);