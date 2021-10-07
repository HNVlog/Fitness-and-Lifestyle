<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\User;

class RegisterController extends Controller
{


    //
    public function index(){
        return view('front.login.register');
    }
    public function postRegister(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {

            return Redirect::to('/register')->withErrors($validator->errors());
        }

        $user=new User();
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->level=1;
        $user->avatar='default-avatar.jpg';
        $user->save();

        return Redirect::to('/login')->withInput()->with("Sign Up Success.");
    }
}
