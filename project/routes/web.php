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
    return view('home');
})->middleware('roles:0');;

Route::get('/about', function () {
    return view('about');
})->middleware('roles:0');

Route::get('/contact', function () {
    return view('contact');
})->middleware('roles:0');

Route::get('/register', function () {
    return view('register');
})->middleware('roles:0');

Route::get('/games', function () {
    return view('games');
})->middleware('roles:0');

Route::get('/teams', function () {
    return view('teams');
})->middleware('roles:0');

Route::get('/players', function () {
    return view('players');
})->middleware('roles:0');

Route::get('/coaches', function () {
    return view('coaches');
})->middleware('roles:0');

Route::get('/leagues', function () {
    return view('leagues');
})->middleware('roles:0');

Route::get('/tournaments', function () {
    return view('tournaments');
})->middleware('roles:0');

Route::get('/admin','AdminController@GetUsers')->middleware('roles:2');

Route::post('/admin/assign-roles',['uses'=>'AdminController@PostAdminAssignRoles','as' => 'admin.assign'])->middleware('roles:2');

Route::post('/register/submit','RegisterController@submit')->middleware('roles:0');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');