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

Route::get('/employer/dashboard', [
    'uses' => 'EmployerController@index',
    'as' => 'employer_dashboard'
]);
