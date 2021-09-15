<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class YourCourseController extends Controller
{
    //
    public function index(){
//        $products=Course::where('')
        return view('front.your_course.index');
    }
}
