<?php

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
    return view('welcome');
});

Auth::routes(['register' => false]);

/* Master Resources */
Route::resources([
    'class' => 'ClassController',
    'teacher' => 'TeacherController',
    'student' => 'StudentController',
]);

/* Confiure Class */
Route::get('/home', 'ConfigureController@index')->name('home');
Route::get('configure/export_pdf', 'ConfigureController@export_pdf')->name('configure.export_pdf');
Route::any('configure/teacher/{class_id}','ConfigureController@teacher')->name('configure.teacher');
Route::any('configure/students/{class_id}','ConfigureController@student')->name('configure.student');
Route::patch('configure/students_reset/{class_id}','ConfigureController@students_reset')->name('configure.students_reset');

