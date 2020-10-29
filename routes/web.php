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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

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


Route::get('/dashboard', 'HomeController@index')->name('all_dash');
Route::get('/home', 'HomeController@index')->name('all_home');

Route::get('/reservation','ReservationController@show')->name('reservation.show');
// Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');


