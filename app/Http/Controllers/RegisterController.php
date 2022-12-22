<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('register');
    }
    public function registerUser(Request $request)
    {

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|max:12|min:8',
        'role_name' => 'required'

    ]);
    $user = new User();
    $user->role_name=$request->role_name;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $res=$user->save();
    if($res){
        return back()->with('success','you have registered successfuly');
    }
    else{
        return back()->with('fail');
    }

}
public function table()
    {
        return view('table');
    }
    public function uploads()
    {
        return view('uploads');
    }
    public function syllabus()
    {
        return view('syllabus');
    }
    public function adminsyllabus()
    {
        return view('adminsyllabus');
    }

    public function adminupload()
    {
        return view('adminupload');
    }

    public function logout(){

        return view('login');

    }
public function passwordupdate(Request $request){

    //     $name=time() . "-ws." . $request->file('image')->getClientOriginalExtension();
    //     //$name=$request->file('image')->getClientOriginalName();
    //     $request->file('image')->move(public_path('images'));
    //    // $request->file('image')->store('images');
        $user->name=$request->name;
        $user->password=$request->password;
        $user->save();
        $user->passwordupdate();

        return view('passwordupdate')->with('status',"Password Updated Successfully");
    }


}
