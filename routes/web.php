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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
Auth::routes();
Route::get('/dashboard','HomeController@index')->name('all_dash');
Route::get('/home','HomeController@index')->name('all_home');




Route::get('/dashboard/customer/view/{id}', 'CustomerController@view')->name('view');
Route::get('/dashboard/customer/delete_2/{id}', 'CustomerController@view_2')->name('view');
Route::delete('/dashboard/customer/destroy/{id}', 'CustomerController@destroy')->name('delete');
Route::get('/dashboard/customer', 'CustomerController@show')->name('customer');
Route::post('/dashboard/customer/add', 'CustomerController@add')->name('add_customer');
Route::get('/dashboard/customer/edit_2/{id}', 'CustomerController@view_3')->name('view');
Route::put('/dashboard/customer/edit/{id}', 'CustomerController@edit')->name('edit_customer');


Route::get('/reservation','ReservationController@show')->name('reservation');
// Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');
Route::get('/dashboard/rooms', 'RoomController@index')->name('room');
Route::post('/dashboard/rooms/add_room', 'RoomController@add')->name('add_room');
Route::get('/dashboard/rooms/delete/{id}', 'RoomController@view_2')->name('view_delete');
Route::delete('/dashboard/rooms/destroy/{id}', 'RoomController@destroy')->name('delete_room');
Route::get('/dashboard/rooms/view/{id}', 'RoomController@view')->name('view_room');
Route::get('/dashboard/rooms/edit/{id}', 'RoomController@view_3')->name('view_room');
Route::put('/dashboard/rooms/edit_room/{id}', 'RoomController@edit')->name('edit_room');


Route::get('/dashboard/booking', 'BookingController@index')->name('booking');
Route::get('/dashboard/booking/delete/{id}', 'BookingController@view_2')->name('view_delete');
Route::delete('/dashboard/booking/destroy/{id}', 'BookingController@destroy')->name('delete_booking');
Route::get('/dashboard/booking/view/{id}', 'BookingController@view')->name('view_booking');

Route::get('/dashboard/reservation', 'ReservationController@index')->name('reservation');
Route::get('/dashboard/reservation/delete/{id}', 'ReservationController@view_2')->name('view_delete');
Route::delete('/dashboard/reservation/destroy/{id}', 'ReservationController@destroy')->name('delete_reservation');
Route::get('/dashboard/reservation/view/{id}', 'ReservationController@view')->name('view_room');
Route::post('/dashboard/reservation/add_reservation', 'ReservationController@add')->name('add_reservation');
Route::get('/dashboard/reservation/edit/{id}', 'ReservationController@view_3')->name('view_reservation');
Route::put('/dashboard/reservation/edit_reservation/{id}', 'ReservationController@edit')->name('edit_reservation');


