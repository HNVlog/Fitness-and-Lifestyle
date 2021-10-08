<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Customer_couser;
use App\Models\User;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class YourCourseController extends Controller
{
    //
    public function index($id){
        $customer_couseres = Customer_couser::where('user_id',$id)
            ->where('level','1')
            ->get();

        return view('front.your_course.index', compact('customer_couseres'));
    }
    public function add(Request $request,$id){
        $email=User::findOrFail($id);
        Cart::destroy();
        $request ->validate([
            'user_id'=>'required',
            'image'=>'required',
            'class_name'=>'required',
//            'teacher_name'=>'required',
            'price'=>'required',

        ]);
//        Customer_couser::create($request->all());
        $cus=new Customer_couser();
        $cus->user_id=$email->id;
        $cus->email=$email->email;
        $cus->image=$request->image;
        $cus->class_name=$request->class_name;
        $cus->price=$request->price;
        $cus->level=0;
        $cus->save();

//        return response()->json([
//            'ok' => 'true',
//        ]);
        return '1';
    }

}
