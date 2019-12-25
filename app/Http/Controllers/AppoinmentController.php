<?php

namespace App\Http\Controllers;

use App\Appoinment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $ap=new Appoinment();
        $ap->trainer_id=$request->input('trainer_id');
        $ap->user_id=$request->input('user_id');
        $ap->d_t=$request->input('d_t');
        $ap->notes=$request->input('notes');
        $ap->save();
        return redirect('/manage_appointment')->with('status','Added Successfully ');
    }

    public function approve(Request $request)
    {
        $ap=Appoinment::find($request->input('id'));;
        $ap->d_t=$request->input('d_t');
        $ap->notes=$request->input('notes');
        $ap->status=1;
        $ap->save();
        return redirect('/appointment_all')->with('status','Approved Successfully ');
    }

    public function del_appointment($id)
    {
        $ban = Appoinment::find($id);
        $ban->delete();

        return redirect('/manage_appointment')->with('status','Deleted Successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function show(Appoinment $appoinment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoinment $appoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoinment $appoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoinment $appoinment)
    {
        //
    }
}
