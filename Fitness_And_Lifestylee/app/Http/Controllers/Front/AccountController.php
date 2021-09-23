<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class AccountController extends Controller
{
    //
    public function index(){
        return view('front.account.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => ['required', Rule::unique('users','email')->ignore(Auth::user()->id)],
            'name' => 'required',
            'phone' => 'required',
            'address'=>'required',
        ]);

        Auth::user()->update($request->only(['email','name','phone','address']));

        return back()->with('success', 'Account successfully changed!');
    }

}
