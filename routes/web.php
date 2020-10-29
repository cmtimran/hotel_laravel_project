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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customer/{id}', 'CustomerController@index')->name('customer');
Route::get('/Reservation/{id}', 'ReservationController@index')->name('reservation');
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

// Route::get('/Room/{id}', 'RoomController@index')->name('room');

Route::get('/header', function () {
    return view('frontend.header');
});
Route::get('/footer', function () {
    return view('frontend.footer');
});
Route::get('/home', function () {
    return view('frontend.homepage');
});
Route::get('/services', function () {
    return view('frontend.servicespage');
});

Route::get('/Room/{id}', 'RoomController@show');
