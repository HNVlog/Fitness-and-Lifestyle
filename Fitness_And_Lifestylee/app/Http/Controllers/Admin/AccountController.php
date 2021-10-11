<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\Return_;

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
    public function accountid(Request $request, $id){
        $accountedit = User::FindOrFail($id);

        return view('admin.account-edit',compact('accountedit'));
    }
    public function delete($id){
        User::destroy($id);
        return back();
    }

    public function update1(Request $request, $id)
    {
        $request->validate([
            'email' => Rule::unique('users','email')->ignore($id)
//            'name' => 'required',
//            'phone' => 'required',
//            'address'=>'required',
//            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileup = $request->avatar;
        $path = 'front/img/user/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name);

        $upload=User::findOrFail($id);
        $upload->email=$request->email;
        $upload->name=$request->name;
        $upload->phone=$request->phone;
        $upload->address=$request->address;
        $upload->avatar=$file_name;
        $upload->save();


//        Auth::user()->update($request->only(['avatar','email','name','phone','address']));

        return back()->with('success', 'Account successfully changed!');
    }


}
