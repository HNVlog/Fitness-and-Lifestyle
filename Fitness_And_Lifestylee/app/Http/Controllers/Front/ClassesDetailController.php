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
    public function show(Request  $request){
        $classDetails = ClassesDetail::all();
        $blogComments = BlogComment::all();
        $classProducts = Product::where('featured',true)->where('product_category_id',1)->limit(3)->get();
        $classesImages = ProductImage::all();

        $Product_Id = $request -> input('Product_Id');
        if (is_null($Product_Id)) {
            $Product_Id = 1;
        }

        $path = $request -> input('path');
        if (is_null($path)){
            $path = 1;
        }

//        $classDetails = $classDetails->forPage($path, 1)->all();
//        $blogComments = $blogComments->forPage($path, 1)->all();
//        $classesProducts = $classesProducts->forPage($path, 1)->all();

        $classesImage = $classesImages->where('product_id', '=', $Product_Id)->first();
        $classDetail = $classDetails[$path-1];
        $blogComments = $blogComments->where('product_id', '=', $Product_Id)->all();
        $classesProduct = $classProducts->where('product_id', '=', $Product_Id)->first();


        return view('front.classes.show',compact('classDetail','blogComments','classProducts','classesProduct', 'path', 'classesImage'));
    }

//     Post Comments
    public function postComment(Request $request){
        $request ->validate([
            'name'=>'required',
            'email'=>'required',
            'messages'=>'required',
            'rating'=>'required',
            'blog_id'=>'required',
        ]);
        BlogComment::create($request->all());
//        return redirect()->route('/classes/{id}')
//            ->with('success','thành công');
        return redirect()->back();
    }
}

