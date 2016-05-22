<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/student/profile', [
    'uses' => 'UserController@index',
    'as' => 'student_profile'
]);

Route::get('/student/projects/new', [
    'uses' => 'UserController@newProject',
    'as' => 'new_project'
]);

Route::get('/student/profile/update', [
    'uses' => 'UserController@profileUpdate',
    'as' => 'profile_update'
]);

Route::get('/employer/dashboard', [
    'uses' => 'EmployerController@index',
    'as' => 'employer_dashboard'
]);

Route::get('/employer/tasks/new', [
    'uses' => 'EmployerController@newTask',
    'as' => 'employer_task'
]);

Route::get('/employer/profile/update', [
    'uses' => 'EmployerController@profileUpdate',
    'as' => 'employer_profile_update'
]);