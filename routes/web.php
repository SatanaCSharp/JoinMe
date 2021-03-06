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

Route::get('/admin','Admin\DashboardController@dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Admin')->prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('/roles','RolesController');
    Route::resource('/users','UsersController');
    Route::resource('/events','EventsController');
    Route::resource('/categories','CategoriesController');
    Route::resource('/participants','ParticipantsController')->only(['index','update','destroy']);
    Route::post('/participant/{id}','ParticipantsController@store')->name('participant.store');
});
