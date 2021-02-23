<?php

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

Route::get('/', function () {
    return view('home');
});

Route::resource('student', 'StudentController');
Route::resource('class_rooms', 'ClassRoomsController');
Route::resource('course', 'CourseController');


Route::get('students_api', 'StudentController')->name('students_api');