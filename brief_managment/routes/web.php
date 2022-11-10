<?php

use App\Http\Controllers\Brief_controller;
use App\Http\Controllers\task_controller;

use App\Http\Controllers\promotions_controller;
use App\Http\Controllers\students_controller;
use App\Models\brief;
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
Route::get('/index_students/{id_brief}', [students_controller::class, 'show_students']);

// show edit student view
Route::get('/edit_student_form/{id}', [students_controller::class, 'edit_student_view']);

// save students modification
Route::post('/student_saved/{id}', [students_controller::class, 'update_student']);

// delete student
Route::get('/student_deleted/{id}', [students_controller::class, 'delete_student']);


// display brief
Route::get('/brief_list', [Brief_controller::class, 'display_briefs']);

// insert brief
Route::post('/insert_brief', [Brief_controller::class, 'insert_brief']);

//edit brief view
Route::get('/edit_brief/{id}', [Brief_controller::class, 'edit_brief_view']);

// save updated brief 
Route::post('/updated_brief/{id}', [Brief_controller::class, 'updated_brief']);

//delete_brief
Route::get('/delete_brief/{id}', [Brief_controller::class, 'delete_brief']);



// show tasks 
Route::post('/task_list', [task_controller::class, 'updated_brief']);

// add task 
Route::get('/add_task_view/{id}', [task_controller::class, 'add_task_view']);
Route::post('/insert_task/{id}', [task_controller::class, 'insert_task']);

//edit task
Route::get('/edit_task_view/{id}', [task_controller::class, 'edit_task_form']);
Route::post('/updated_task/{id}', [task_controller::class, 'update_task']);

Route::get('/delete_task/{id}', [task_controller::class, 'delete_task']);

// assign brief 
Route::get('/assign_brief/{id_brief}/{id_student}', [Brief_controller::class, 'attachBrief']);

Route::get('/detach_brief/{id_brief}/{id_student}', [Brief_controller::class, 'detachBrief']);

Route::get('/assigned_toAll/{id_brief}', [Brief_controller::class, 'assignAll']);