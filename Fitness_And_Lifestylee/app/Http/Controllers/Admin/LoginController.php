<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //

    //
    public function index(){
        return view('admin.login.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required',
//            'level'=>0,
        ]);
        if (Auth::attempt([
            'email' =>$request->email,
            'password' =>$request->password
        ],$request->input('remember'))) {

//            Đăng nhập đúng
            return redirect()->route('admin');
        } else {
//            Đăng nhập sai
            return Redirect::to('/ad/login')->with('status',"Wrong email or password!");
        }
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/ad/login');
    }
}

