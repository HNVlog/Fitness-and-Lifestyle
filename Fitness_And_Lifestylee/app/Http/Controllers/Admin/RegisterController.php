<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('admin.login.register');
    }
    public function postRegister(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {

            return Redirect::to('/ad/register')->withErrors($validator->errors());
        }

        $user=new User();
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->level=0;

        $user->save();

        return Redirect::to('/ad/login')->withInput()->with("Sign Up Success.");
    }
}
