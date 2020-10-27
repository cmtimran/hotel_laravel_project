<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Reservation;
use App\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function book()
    {
         $bookings_num =Booking::count();
        dd($bookings_num);
    }
    public function customer()
     {
       $customers_num =Customer::count();
         dd($customers_num);
    }
    public function reservation()
    {
        $reservations_num =Reservation::count();
        dd($reservations_num);
    }
    public function room()
    {
        $res_rooms =Room::where('status','=','1')->count();
        dd($res_rooms);
    }
    public function rooms_avaliable()
    {
        $avl_rooms =Room::where('status','=','0')->limit(5)->get();
        dd($avl_rooms);
    }
    public function customers()
    {
        $latest_cust =Customer::limit(5)->orderBy('id', 'DESC')->get();
        dd($latest_cust);
    }
    public function bookings()
    {
        $latest_book =Booking::limit(5)->orderBy('id', 'DESC')->get();
        dd($latest_book);
    }
}
