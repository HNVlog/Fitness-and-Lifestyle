<?php

namespace App\Http\Controllers\Admin;

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Commentcheck;
use App\Models\Customer_couser;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index(MonthlyUsersChart $chart){
        $classes=Product::all();
        $blog=Blog::all();
        $cmt=Commentcheck::all();
        $user=User::all();
        $comment=BlogComment::all();
        $orders=Customer_couser::all();
        $order1=Customer_couser::where('level','1')->get();
        $support=Appointment::all();
        $sup1=Appointment::where('level','1')->get();
        $class=count($classes);
        return view('admin.index',compact('classes','blog','cmt','user','comment','orders','order1','support','sup1','class'),['chart' => $chart->build()]);
    }

}
