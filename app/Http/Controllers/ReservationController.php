<?php

namespace App\Http\Controllers;

use App\reservation;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $reservations = reservation::paginate(10);
        return view('backend.reservation', compact('reservations'));
    }
    public function view_2($id)
    {
        $delete_reservation = reservation::find($id);
        return view('backend.components.delete', compact('delete_reservation'));
    }
    public function view($id)
    {
        $reservation = reservation::find($id);
        // dd($custom);
        return view('backend.components.view', compact('reservation'));
    }
    public function add(Request $request)
    {
        $validation= Validator::make($request->all(),[
            'check_in'=>'required',
            'check_out'=>'required',
            'room_id'=>'required|integer',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $data['check_in']         = $request->check_in;
        $data['check_out']        = $request->check_out;
        $data['room_id']          = $request->room_id;
        $data['updated_at']       = now();
        reservation::create($data);
        return redirect()->back();
    }
    public function view_3($id)
    {
        $edit_reservation = reservation::find($id);
        return view('backend.components.edit', compact('edit_reservation'));
    }
    public function edit(Request $request, $id)
    {
        $validation= Validator::make($request->all(),[
            'check_in'=>'required',
            'check_out'=>'required',
            'room_id'=>'required|integer',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $reservation = reservation::whereId($id)->first();
        if($reservation){
            $data['check_in']         = $request->check_in;
            $data['check_out']        = $request->check_out;
            $data['room_id']          = $request->room_id;
            $data['updated_at']  = now();
            $reservation->update($data);
            return redirect()->back();
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = reservation::find($id);
        $customer->delete();
        return redirect()->back();
    }
}
