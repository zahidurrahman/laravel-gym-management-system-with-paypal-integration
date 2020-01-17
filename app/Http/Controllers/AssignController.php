<?php

namespace App\Http\Controllers;

use App\Assign;
use Illuminate\Http\Request;
use DB;
class AssignController extends Controller
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
    public function assign_trainer(Request $request)
    {
        //check a;ready assign or not
        $get_unit = DB::table('assigns')->where('user_id',$request->Input('user_id'))->first();
        if($get_unit!=Null){
          return redirect('/add_trainer')->with('error','Already Added ');
        }else{
          $assign=new Assign();
          $assign->user_id=$request->Input('user_id');
          $assign->trainer_id=$request->Input('trainer_id');
          $assign->save();
          return redirect('/add_trainer')->with('status','Added Successfully ');
        }



    }

    public function edit_trainer(Request $request)
    {

          $assign=Assign::find($request->Input('id'));
          $assign->trainer_id=$request->Input('trainer_id');
          $assign->save();
          return redirect('/add_trainer')->with('status','Updated Successfully ');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function show(Assign $assign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function edit(Assign $assign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assign $assign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assign  $assign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assign $assign)
    {
        //
    }
}
