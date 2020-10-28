<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
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
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->back();
    }
    public function show()
    {
        $customers = Customer::paginate(10);
        return view('backend.customers', compact('customers'));
    }

    public function view($id)
    {
        $custom = Customer::find($id);
        // dd($custom);
        return view('backend.components.view', compact('custom'));
    }
    public function view_2($id)
    {
        $delete_custom = Customer::find($id);
        // dd($custom);
        return view('backend.components.delete', compact('delete_custom'));
    }
    public function view_3($id)
    {
        $edit_custom = Customer::find($id);
        // dd($custom);
        return view('backend.components.edit', compact('edit_custom'));
    }
    public function add(Request $request)
    {
        $validation= Validator::make($request->all(),[
            'name'=>'required|string',
            'email'=>'required|email',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $data['name']         = $request->name;
        $data['phone']        = $request->phone;
        $data['email']        = $request->email;
        $data['address']      = $request->address;
        $data['nationality']  = $request->nationality;
        Customer::create($data);
        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        $validation= Validator::make($request->all(),[
            'name'=>'required|string',
            'email'=>'required|email',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $customer = Customer::whereId($id)->first();
        if($customer){
            $data['name']         = $request->name;
            $data['phone']        = $request->phone;
            $data['email']        = $request->email;
            $data['address']      = $request->address;
            $data['nationality']  = $request->nationality;
            $customer->update($data);
            return redirect()->back();
        }
    }
}
