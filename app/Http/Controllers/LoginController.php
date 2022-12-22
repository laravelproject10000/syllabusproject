<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $redirectTo;
        public function login()
        {
            return view('login');
        }


    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $details=$request->only('email','password','role_name');
        if(Auth::attempt($details))
        {
            if(Auth::check()&&auth()->user()->role_name=='Admin')
            {
                return redirect()->intended('admindashboard')->withSuccess('you have successfuly logged in');

            }

            else if(Auth::check()&&auth()->user()->role_name=='Staff')
            {
                return redirect()->intended('staffdashboard')->withSuccess('you have successfuly logged in');

            }
            else{
                return redirect()->intended('studentdashboard')->withSuccess('you have successfuly logged in');
            }
        }

    }
    public function studentdashboard(){
        return view('studentdashboard');
    }

    public function studentnavbar(){
        $data=array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        return view("student-navbar",compact('data'));
    }
    public function admindashboard(){
        return view('admindashboard');
    }

    public function staffdashboard(){
        return view('staffdashboard');
    }

    public function index(){
        return view('index');
    }



}
