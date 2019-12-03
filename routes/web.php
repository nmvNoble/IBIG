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

Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::put('/projects/{project}', 'ProjectsController@update');
<<<<<<< Updated upstream
=======


Route::get('/organizations/{organization}/aboutUs', 'OrganizationsController@showAboutUs');
Route::get('/organizations/{organization}/affiliates', 'OrganizationsController@showAffiliates');
Route::get('/organizations/{organization}/donatedTo', 'OrganizationsController@showDonatedTo');
Route::get('/organizations/{organization}/owned', 'OrganizationsController@showOwned');

Route::get('/users/{user}/donatedTo', 'UsersController@showDonatedTo');
Route::get('/users/{user}/owned', 'UsersController@showOwned');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/getUser', 'CustomizeController@getUser');
Route::post('/updateUser', 'CustomizeController@updateUser');
>>>>>>> Stashed changes
