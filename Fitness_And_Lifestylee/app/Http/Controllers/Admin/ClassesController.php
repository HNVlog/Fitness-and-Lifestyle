<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ClassesDetail;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
{
    //
    public function index(){
        $products=Product::all();

        return view('admin.classes',compact('products'));
    }
    public function delete($id){
        Product::destroy($id);
        return back();
    }
    public function details($id){
        $product=Product::findOrFail($id);
        $img=ProductImage::findOrFail($id);
        $productes=ClassesDetail::findOrFail($id);

        return view('admin.classes-details',compact('product','img','productes'));
    }
    public function classesadd(){
        return view('admin.classes-add');
    }
    public function createnew(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'teacher_name' =>'required',
            'price' => 'required|numeric',
            'level'=>'required',
            'study_date'=>'required',
            'study_time'=>'required',
            'tag'=>'required',
            'content'=>'required',
            'avatar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'path'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'path_1'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $product=new Product();
        $product->id=$request->id;
        $product->product_category_id=1;
        $product->name=$request->name;
        $product->teacher_name=$request->teacher_name;
        $product->level=$request->level;
        $product->study_date=$request->study_date;
        $product->study_time=$request->study_time;
        $product->price=$request->price;
        $product->featured=1;
        $product->tag=$request->tag;
        $product->save();

        $details=new ClassesDetail();
        $details->id=$request->id;
        $details->product_id=$request->product_id;
        $details->address=$request->address;
        $details->teacher_name=$request->teacher_name;
        $details->study_date=$request->study_date;
        $details->study_time=$request->study_time;
        $details->content=$request->content;
        $details->title='';
        $details->name=$request->name;
        $details->avatar=$request->avatar;
        $details->save();

        $img=new ProductImage();
        $img->id=$request->id;
        $img->product_id=$request->product_id;
        $img->path=$request->path;
        $img->path_1=$request->path_1[0];
        $img->path_2=$request->path_1[1];
        $img->path_3=$request->path_1[2];
        $img->path_4=$request->path_1[3];
        $img->save();

        return back();
    }
}
