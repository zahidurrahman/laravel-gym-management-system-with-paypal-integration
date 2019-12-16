<?php

namespace App\Http\Controllers;

use App\Mypay;
use DemeterChain\A;
use Illuminate\Http\Request;
use App\User;
use Auth;
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
    public function index()
    {
       //insert data payment table if the payment not assign
        $due=Mypay::where('user_id',Auth::id())->where('payment_status','approved')->first();

        if($due==null &&  Auth::user()->role =='0' ){

            return view('user.payment');

        }else{
            return view('home');

        }


    }

    public function bann_user($id)
    {
      $ban = User::find($id);
      if($ban->status == '0'){
          $ban->status = '1';
          $ban->save();
          return redirect('/manage_user')->with('status','User Successfully Activated');
      }
      else{
        $ban->status = '0';
        $ban->save();
        return redirect('/manage_user')->with('status','User Successfully Banned');
      }
    }

    public function del_user($id)
    {

      $ban = User::find($id);
      $ban->delete();
      return redirect('/manage_user')->with('status','User Successfully Deleted');

    }


}
