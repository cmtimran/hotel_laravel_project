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


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customer/{id}', 'CustomerController@index')->name('customer');
Route::get('/Room/{id}', 'RoomController@index')->name('room');
Route::get('/Reservation/{id}', 'ReservationController@index')->name('reservation');

Route::get('/dashboard/customer', 'CustomerController@show')->name('customer');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/', 'CustomerController@index')->name('root');
Route::get('/color/{id}/edit', 'CustomerController@update')->name('color.update');
Route::post('/color/{id}', 'CustomerController@edit')->name('color.edit');
