<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Customer_couser;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class YourCourseController extends Controller
{
    //
    public function index(){
        $customer_couseres = Customer_couser::all();

        return view('front.your_course.index', compact('customer_couseres'));
    }
    public function add(Request $request){

        $request ->validate([
            'user_id'=>'required',
            'image'=>'required',
            'class_name'=>'required',
//            'teacher_name'=>'required',
            'price'=>'required',

        ]);
        Customer_couser::create($request->all());
//        return response()->json([
//            'ok' => 'true',
//        ]);
        return '1';
    }

}
