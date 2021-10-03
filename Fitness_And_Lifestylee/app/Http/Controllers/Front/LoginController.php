<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    //
    public function index(){
        return view('front.login.login');
    }

    public function postLogin(Request $request)
    {
//        dd($request->input());
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required',
//            'level'=>1,
        ]);
        if (Auth::attempt([
            'email' =>$request->email,
            'password' =>$request->password
        ],$request->input('remember'))) {

//            Đăng nhập đúng
            return redirect()->route('home');
        } else {
//            Đăng nhập sai
            return Redirect::to('/login')->with('status',"Wrong email or password!");
        }
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
