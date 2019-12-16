<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;
use Auth;

class WorkoutController extends Controller
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

    public function add_workout(Request $request)
    {
         $meal= new Workout();
         $meal->trainer_id=Auth::id();
         $meal->user_id=$request->Input('user_id');
         $meal->name_day=$request->Input('name_day');
         $meal->workout_details=$request->Input('workout');
         $meal->save();
         return redirect('/manage_trainee')->with('status','Added Successfully ');



    }

    public function del_workout($id)
    {

      $ban = Workout::find($id);
      $ban->delete();
      return redirect()->back()->with('status','Workout Successfully Deleted');

    }
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
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function edit(Workout $workout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workout $workout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workout $workout)
    {
        //
    }
}
