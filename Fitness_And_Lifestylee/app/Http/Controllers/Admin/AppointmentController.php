<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function index(){
        $apps=Appointment::where('level','0')->get();
        $app=Appointment::where('level','1')->get();

        return view('admin.appointment',compact('app','apps'));
    }

    public function postAppointment(Request $request){
        $request ->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'classes'=>'required',
            'message'=>'required',
        ]);
        $new=new Appointment;
        $new->name=$request->name;
        $new->email=$request->email;
        $new->phone=$request->phone;
        $new->classes=$request->classes;
        $new->message=$request->message;
        $new->level=0;
        $new->save();

        return back();
    }
    public function add($id){
        $order=Appointment::findOrFail($id);
        $order->level=1;
        $order->save();

        return back();
    }
}
