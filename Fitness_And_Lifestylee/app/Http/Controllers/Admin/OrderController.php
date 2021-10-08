<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use App\Models\Customer_couser;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $orders=Customer_couser::where('level','0')->get();
        $orderes=Customer_couser::where('level','1')->get();

        return view('admin.order',compact('orderes','orders'));
    }
    public function delete(){
        Customer_couser::destroy();
        return back();
    }
    public function add($id){
        $order=Customer_couser::findOrFail($id);
        $order->level=1;
        $order->save();

        return back();
    }
}
