<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index(Request $request)
    {
        $classesProducts = Product::where('featured',true)
            ->where('product_category_id', 1);

        // search follow study_date
        $study_date = $request->input('by_day');
        if ($study_date <> "all" && !is_null($study_date)){
            // check study_date != null and != all, then not using where
            $classesProducts = $classesProducts->where("study_date", 'like', "%".$study_date."%");
        }

        // search follow level
        $level = $request->input('level');
        if ($level <> "all" && !is_null($level)){
            // check level != null and != all, then not using where
            $classesProducts = $classesProducts->where("level", '=', $level);
        }

        // search follow teacher_name
        $teacher_name = $request->input('teacher');
        if ($teacher_name <> "all" && !is_null($teacher_name)){
            // check teacher != null and != all, then not using where
            $classesProducts = $classesProducts->where("teacher_name", '=', $teacher_name);
        }

        // search follow study_time
        $study_time = $request->input('time');
        if ($study_time <> "all" && !is_null($study_time)){
            // check time != null and != all, then not using where
            $classesProducts = $classesProducts->where("study_time", 'like', "%".$study_time."%");
        }

        // end
        $classesProducts = $classesProducts->get();

        $classProducts = Product::where('featured', '=', true)
            ->where('product_category_id', '=', 1)
            ->limit(3)->get();

        $page = $request->input('page');
        if (is_null($page)){
            $page = 1;
        }

        $classesProducts = $classesProducts->forPage($page, 6)->all();

        return view('front.classes.index', compact('classesProducts','classProducts', 'page'));
    }

//$collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
//
//$chunk = $collection->forPage(2, 3);
//
//$chunk->all();
// [4, 5, 6]


//    public function index() {
//        $classesProducts = Product::where('featured',true)->where('product_category_id', 1)->get();
//        $classProducts = Product::where('featured',true)->where('product_category_id',1)->limit(3)->get();
//
//        return view('front.classes.index', compact('classesProducts','classProducts'));
//    }
}
