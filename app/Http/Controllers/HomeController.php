<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Reservation;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    // public function book()
    // {
    //     $bookings_num =Booking::count();
    //     return view('backend.dashboard',compact('bookings_num'));
    // }
    // public function reservation()
    //  {
    //     $reservations_num =Reservation::count();
    //     return view('backend.dashboard',compact('reservations_num'));

    // }
    public function index()
    {
        $book_num =Booking::count();
        $reservations_num =Reservation::count();
        $customers_num =Customer::count();
        $res_rooms =Room::where('status','=','1')->count();
        $avl_rooms =Room::where('status','=','0')->limit(5)->get();
        $latest_cust =Customer::limit(5)->orderBy('id','DESC')->get();
        $latest_book =Booking::limit(5)->orderBy('id','DESC')->get();
        return view('backend.dashboard',compact(['book_num','reservations_num','customers_num','res_rooms','avl_rooms','latest_cust','latest_book']));

    }
}
