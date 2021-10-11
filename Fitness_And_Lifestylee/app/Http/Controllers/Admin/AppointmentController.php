<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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
    public function answer($id){
        $answer=Appointment::findOrFail($id);

        return view('admin.answer',compact('answer'));
    }
    public function add(Request $request,$id){
        $order=Appointment::findOrFail($id);
        $order->level=1;
        $order->answer=$request->answer;
        $order->save();

        $this->sendMail($request,$order);

        return Redirect::to('/ad/support');
    }
    private function sendMail($request,$order){
        $email=$order->email;
        $ans=$request->answer;

        Mail::send('admin.email',compact('order','request'),function ($mess) use ($ans, $email){
            $mess->from('fal@gmail.com','Fitness and Lifestyle');
            $mess->to($email,$email);
            $mess->subject('Hello!');
        });

    }

}
