<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class AccountController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('front.account.index', compact('users'));
    }

    public function update1(Request $request)
    {
        $request->validate([
            'email' => ['required', Rule::unique('users','email')->ignore(Auth::user()->id)],
//            'name' => 'required',
//            'phone' => 'required',
//            'address'=>'required',
//            'avatar' => 'required',
        ]);
//        $fileup = $request->avatar;
//        $path = 'front/img/user/';
//        $file_name = $fileup->getClientOriginalName();
//        $fileup->move($path,$file_name);
//
//        $upload=User::findOrFail(Auth::user()->id);
////        $upload->email=$request->email;
////        $upload->name=$request->name;
////        $upload->phone=$request->phone;
////        $upload->address=$request->address;
//        $upload->avatar=$file_name;
//        $upload->save();


        Auth::user()->update($request->only(['avatar','email','name','phone','address']));

        return back()->with('success', 'Account successfully changed!');
    }

    public function update2(Request $request)
    {
        $request->validate([
            'password' => ['required', Rule::unique('users','password')->ignore(Auth::user()->id)],
        ]);

        Auth::user()->update($request->only(['password']));

        return back()->with('success', 'Account successfully changed!');
    }


}
