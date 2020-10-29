<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
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
        $rooms = Room::paginate(10);
        return view('backend.room', compact('rooms'));
    }
    public function add(Request $request)
    {
        $validation= Validator::make($request->all(),[
            'floar'=>'required|integer',
            'view'=>'string',
            'type'=>'required',
            'status'=>'required',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $data['floar']       = $request->floar;
        $data['view']        = $request->view;
        $data['type']        = $request->type;
        $data['status']      = $request->status;
        Room::create($data);
        return redirect()->back();
    }
    public function view_2($id)
    {
        $delete_room = Room::find($id);
        return view('backend.components.delete', compact('delete_room'));
    }
    public function view($id)
    {
        $room = Room::find($id);
        return view('backend.components.view', compact('room'));
    }
    public function view_3($id)
    {
        $edit_room = Room::find($id);
        return view('backend.components.edit', compact('edit_room'));
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
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Rooms = Room::paginate(10);
        return view('backend.Room', compact('Rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $validation= Validator::make($request->all(),[
            'floar'=>'required|integer',
            'view'=>'string',
            'type'=>'required',
            'status'=>'required',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $room = Room::whereId($id)->first();
        if($room){
            $data['floar']       = $request->floar;
            $data['view']        = $request->view;
            $data['type']        = $request->type;
            $data['status']      = $request->status;
            $data['updated_at']  = now();
            $room->update($data);
            return redirect()->back();
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->back();
    }
}
