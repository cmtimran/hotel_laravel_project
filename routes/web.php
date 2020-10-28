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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customer/{id}', 'CustomerController@index')->name('customer');
Route::get('/Room/{id}', 'RoomController@index')->name('room');
Route::get('/Reservation/{id}', 'ReservationController@index')->name('reservation');

Route::get('/dashboard/customer/view/{id}', 'CustomerController@view')->name('view');
Route::get('/dashboard/customer/delete_2/{id}', 'CustomerController@view_2')->name('view');
Route::delete('/dashboard/customer/destroy/{id}', 'CustomerController@destroy')->name('delete');
Route::get('/dashboard/customer', 'CustomerController@show')->name('customer');
Route::post('/dashboard/customer/add', 'CustomerController@add')->name('add_customer');
Route::get('/dashboard/customer/edit_2/{id}', 'CustomerController@view_3')->name('view');
Route::put('/dashboard/customer/edit/{id}', 'CustomerController@edit')->name('edit_customer');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

