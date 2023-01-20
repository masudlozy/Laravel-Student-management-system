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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    //Departments
    Route::get('Department', 'DepartmentController@index');
    Route::get('department/create', 'DepartmentController@create');
    Route::post('department/save', 'DepartmentController@save');
    Route::get('department/edit/{id}', 'DepartmentController@edit');
    Route::post('department/update/{id}', 'DepartmentController@update');
    Route::delete('department/delete/{id}', 'DepartmentController@delete');

    // Class
    Route::get('Classes', 'ClassesController@index');
    Route::get('cls/create', 'ClassesController@create');
    Route::post('cls/save', 'ClassesController@save');
    Route::get('cls/edit/{id}', 'ClassesController@edit');
    Route::post('cls/update/{id}', 'ClassesController@update');
    Route::delete('cls/delete/{id}', 'ClassesController@delete');

    //Student
    Route::get ('Student', 'StudentController@index');
    Route::get('student/create', 'StudentController@create');
    Route::post('student/save', 'StudentController@save');
    Route::get('student/edit/{id}', 'StudentController@edit');
    Route::post('student/update/{id}', 'StudentController@update');
    Route::delete('student/delete/{id}', 'StudentController@delete');



});


