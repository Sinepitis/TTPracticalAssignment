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

Route::get('/games', 'GamesController@index')->middleware('roles:0');


Route::get('/teams', 'TeamController@index')->middleware('roles:0');

Route::get('/players', 'ParticipantController@index')->middleware('roles:0');

Route::get('/leagues', 'LeagueController@index')->middleware('roles:0');

Route::get('/tournaments', 'TournamentController@index')->middleware('roles:0');

Route::get('/lineups', 'LineupController@index')->middleware('roles:0');

Route::get('/admin','AdminController@GetUsers')->middleware('roles:2');

Route::post('/admin/assign-roles',['uses'=>'AdminController@PostAdminAssignRoles','as' => 'admin.assign'])->middleware('roles:2');

Route::post('/register/submit','RegisterController@submit')->middleware('roles:0');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/leagues/Add','LeagueController@create')->middleware('roles:2');

Route::get('/players/Add','ParticipantController@create')->middleware('roles:2');

Route::get('/tournaments/Add','TournamentController@create')->middleware('roles:2');

Route::get('/teams/Add','TeamController@create')->middleware('roles:2');

Route::get('/lineups/Add','LineupController@create')->middleware('roles:2');

Route::get('/games/Add', 'GamesController@create')->middleware('roles:2');
Route::post('/games/Delete', 'GamesController@delete')->middleware('roles:2');
Route::post('/leagues/Delete', 'LeagueController@delete')->middleware('roles:2');
Route::post('/players/Delete', 'ParticipantController@delete')->middleware('roles:2');
Route::post('/teams/Delete', 'TeamController@delete')->middleware('roles:2');
Route::post('/tournaments/Delete', 'TournamentController@delete')->middleware('roles:2');
Route::post('/lineups/Delete', 'LineupController@delete')->middleware('roles:2');



Route::post('/contact/submit', 'MessagesController@submit');
