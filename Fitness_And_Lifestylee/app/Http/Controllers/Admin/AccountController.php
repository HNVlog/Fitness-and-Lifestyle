<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AccountController extends Controller
{
    //
    public function index(){
        $accounts=User::all();
//        try {
//            $pass = Crypt::decryptString($accounts->password);
//        } catch (DecryptException $e) {
//            //
//        }
        return view('admin.account',compact('accounts'));
    }
    public function delete($id){
        User::destroy($id);
        return back();
    }
}
