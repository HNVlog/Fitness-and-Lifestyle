<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ClassesDetail;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ClassesController extends Controller
{
    //
    public function index(){
        $products=Product::all();

        return view('admin.classes',compact('products'));
    }
    public function delete($id){
        Product::destroy($id);
        ProductImage::destroy($id);
        ClassesDetail::destroy($id);

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
        $count=Product::all()->count();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'teacher_name' =>'required',
            'level'=>'required',
            'study_date'=>'required',
            'study_time'=>'required',
            'content'=>'required',
            'price' => 'required|numeric',
            'discount'=>'',
            'futured'=>'1',
            'tag'=>'required',
            'avatar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'path'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $fileupnew = $request->path;
        $pathnew = 'front/img/classes/classes-details/';
        $file_namenew = $fileupnew->getClientOriginalName();
        $fileupnew->move($pathnew,$file_namenew);

        $avatars = $request->avatar;
        $path1 = 'front/img/classes/ClassesTeacherName/';
        $file_namenew1 = $avatars->getClientOriginalName();
        $avatars->move($path1,$file_namenew1);

        $product=new Product();
        $product->id=$request->id;
        $product->product_category_id=1;
        $product->featured=1;
        $product->name=$request->name;
        $product->teacher_name=$request->teacher_name;
        $product->level=$request->level;
        $product->price=$request->price;
        $product->study_date=$request->study_date;
        $product->study_time=$request->study_time;
        $product->tag=$request->tag;
        $product->save();

        $details=new ClassesDetail();
        $details->id=$request->id;
//        $details->product_id=$request->product_id;
        $details->address=' 247 Cau Giay, Ha Noi';
        $details->teacher_name=$request->teacher_name;
        $details->study_date=$request->study_date;
        $details->study_time=$request->study_time;
        $details->content=$request->content;
        $details->title='';
        $details->name=$request->name;
        $details->avatar=$file_namenew1;
        $details->save();

        $img=new ProductImage();
//        $img->id=$request->id;
        $img->product_id=$count+1;
        $img->path=$file_namenew;
        $img->path_1=null;
        $img->path_2=null;
        $img->path_3=null;
        $img->path_4=null;
        $img->save();

        return back();
    }

    public function classes_edit(Request $request, $id){

        $fileupnew = $request->path;
        $pathnew = 'front/img/classes/classes-details/';
        $file_namenew = $fileupnew->getClientOriginalName();
        $fileupnew->move($pathnew,$file_namenew);

        $avatars = $request->avatar;
        $path1 = 'front/img/classes/ClassesTeacherName/';
        $file_namenew1 = $avatars->getClientOriginalName();
        $avatars->move($path1,$file_namenew1);

        $classesedit = Product::findOrFail($id);
        $classesedit->name=$request->name;
        $classesedit->teacher_name=$request->teacher_name;
        $classesedit->level=$request->level;
        $classesedit->price=$request->price;
        $classesedit->study_date=$request->study_date;
        $classesedit->study_time=$request->study_time;
        $classesedit->tag=$request->tag;
        $classesedit->save();

        $details=ClassesDetail::findOrFail($id);
//        $details->id=$request->id;
//        $details->product_id=$request->product_id;
        $details->address=' 247 Cau Giay, Ha Noi';
        $details->teacher_name=$request->teacher_name;
        $details->study_date=$request->study_date;
        $details->study_time=$request->study_time;
        $details->content=$request->content;
        $details->title='';
        $details->name=$request->name;
        $details->avatar=$file_namenew1;
        $details->save();

        $img=ProductImage::findOrFail($id);
//        $img->id=$request->id;
//        $img->product_id=$request->product_id;
        $img->path=$file_namenew;
        $img->path_1=null;
        $img->path_2=null;
        $img->path_3=null;
        $img->path_4=null;
        $img->save();


        return back();
    }
    public function classesid($id){
        $img=ProductImage::findOrFail($id);
        $productes=ClassesDetail::findOrFail($id);

        $classesedit = Product::findOrFail($id);
        return view('admin.classes-edits',compact('classesedit','img','productes'));
    }
}
