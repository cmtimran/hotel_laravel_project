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

Route::get('/dashboard/customer/view/{id}', 'CustomerController@view')->name('view');
Route::get('/dashboard/customer/delete_2/{id}', 'CustomerController@view_2')->name('view');
Route::delete('/dashboard/customer/destroy/{id}', 'CustomerController@destroy')->name('delete');
Route::get('/dashboard/customer', 'CustomerController@show')->name('customer');
Route::post('/dashboard/customer/add', 'CustomerController@add')->name('add_customer');
Route::get('/dashboard/customer/edit_2/{id}', 'CustomerController@view_3')->name('view');
Route::put('/dashboard/customer/edit/{id}', 'CustomerController@edit')->name('edit_customer');

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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

