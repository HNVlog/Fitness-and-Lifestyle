<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ClassesDetail;

class ClassesDetailController extends Controller
{
    public function show($id){
        $classDetails = ClassesDetail::all();
        $blogComments =BlogComment::all();
        $classProducts = Product::where('featured',true)->where('product_category_id',1)->limit(3)->get();
        $classesProducts =ProductImage::all();

        return view('front.classes.show',compact('classDetails','blogComments','classProducts','classesProducts'));
    }
    public function postComment(Request $request){
        BlogComment::create($request->all());

        return redirect()->back();
    }

}
