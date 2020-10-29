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


// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD
// //Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/customer/{id}', 'CustomerController@index')->name('customer');
// Route::get('/Room/{id}', 'RoomController@index')->name('room');
// Route::get('/Reservation/{id}', 'ReservationController@index')->name('reservation');

// Route::get('/dashboard', 'HomeController@book_num')->name('bookings_num');
// Route::get('/dashboard', 'HomeController@customer_num')->name('customers_num');
// Route::get('/dashboard', 'HomeController@reservation_num')->name('reservations_num');
// Route::get('/dashboard', 'HomeController@room_busy')->name('rooms_busy');
// Route::get('/dashboard', 'HomeController@rooms_avaliable')->name('avaliable_rooms');
// Route::get('/dashboard', 'HomeController@customers')->name('latest_cust');
// Route::get('/dashboard', 'HomeController@bookings')->name('latest_book');
=======
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 27411a00ec3b288ca66d18314c985c1ff1b233bb

Route::get('/dashboard/customer/view/{id}', 'CustomerController@view')->name('view');
Route::get('/dashboard/customer/delete_2/{id}', 'CustomerController@view_2')->name('view');
Route::delete('/dashboard/customer/destroy/{id}', 'CustomerController@destroy')->name('delete');
Route::get('/dashboard/customer', 'CustomerController@show')->name('customer');
Route::post('/dashboard/customer/add', 'CustomerController@add')->name('add_customer');
Route::get('/dashboard/customer/edit_2/{id}', 'CustomerController@view_3')->name('view');
Route::put('/dashboard/customer/edit/{id}', 'CustomerController@edit')->name('edit_customer');

<<<<<<< HEAD
Route::get('/dashboard', 'HomeController@index')->name('all_dash');
Route::get('/home', 'HomeController@index')->name('all_home');
=======
Route::get('/dashboard/rooms', 'RoomController@index')->name('room');
Route::post('/dashboard/rooms/add_room', 'RoomController@add')->name('add_room');
Route::get('/dashboard/rooms/delete/{id}', 'RoomController@view_2')->name('view_delete');
Route::delete('/dashboard/rooms/destroy/{id}', 'RoomController@destroy')->name('delete_room');
Route::get('/dashboard/rooms/view/{id}', 'RoomController@view')->name('view_room');
Route::get('/dashboard/rooms/edit/{id}', 'RoomController@view_3')->name('view_room');
Route::put('/dashboard/rooms/edit_room/{id}', 'RoomController@edit')->name('edit_room');
>>>>>>> 27411a00ec3b288ca66d18314c985c1ff1b233bb

Route::get('/reservation','ReservationController@show')->name('reservation.show');
// Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');


<<<<<<< HEAD
=======
Route::get('/dashboard/booking', 'BookingController@index')->name('booking');
Route::get('/dashboard/booking/delete/{id}', 'BookingController@view_2')->name('view_delete');
Route::delete('/dashboard/booking/destroy/{id}', 'BookingController@destroy')->name('delete_booking');
Route::get('/dashboard/booking/view/{id}', 'BookingController@view')->name('view_booking');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

>>>>>>> 27411a00ec3b288ca66d18314c985c1ff1b233bb
