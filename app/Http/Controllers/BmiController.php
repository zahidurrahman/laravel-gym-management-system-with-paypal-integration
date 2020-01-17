<?php

namespace App\Http\Controllers;

use App\Bmi;
use Illuminate\Http\Request;
use Auth;
use DB;

class BmiController extends Controller
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
    public function add_bmi(Request $request)
    {
      //check is alrady there or not
      //$get=Bmi::where('user_id',Auth::id())->first();

    //  if($get==Null){

        $w=$request->Input('weight');
        $h=$request->Input('height');
        $bmi=round($w/(  $h*  $h),2);
        $meal= new Bmi();
        $meal->user_id=Auth::id();
        $meal->weight=$request->Input('weight');
        $meal->height=$request->Input('height');
        $meal->bmi=$bmi;
        $meal->save();
        return redirect('/bmi_all')->with('status','Added Successfully ');
    //  }else{
           //return redirect('/bmi_all')->with('error','Already Added');
      // }

    }
    public function edit_bmi(Request $request)
    {
      //check is alrady there or not
      $w=$request->Input('weight');
      $h=$request->Input('height');
      $bmi=round($w/(  $h*  $h),2);

      $edit=Bmi::find($request->Input('id'));
      $edit->weight=$request->Input('weight');
      $edit->height=$request->Input('height');
      $edit->bmi=$bmi;
      $edit->save();
      return redirect('/bmi_all')->with('status','Updated Successfully ');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function show(Bmi $bmi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function edit(Bmi $bmi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bmi $bmi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bmi $bmi)
    {
        //
    }
}
