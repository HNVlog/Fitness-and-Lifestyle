<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    //
    public function index(){
        $blogs=Blog::all();

        return view('admin.blog',compact('blogs'));
    }
    public function delete($id){
        Blog::destroy($id);
        return back();
    }
    public function details($id){
        $blogs=Blog::findOrFail($id);

        return view('admin.blog-details',compact('blogs'));
    }

    public function blogadd(){
        return view('admin.blog-add');
    }
    public function createnew(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
            'category' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content'=>'required',
            'content_1'=>'required',
            'content_2'=>'required',
            'image_1'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }


        $fileup = $request->image;
        $path = 'front/img/blog/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name);

        $fileup = $request->image_1;
        $path = 'front/img/blog/';
        $file_name1 = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name1);

        $fileup = $request->image_2;
        $path = 'front/img/blog/';
        $file_name2 = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name2);


        $blog=new Blog();
        $blog->user_id=3;
//        $blog->blog_category_id=$request->blog_category_id;
        $blog->title=$request->title;
        $blog->subtitle=$request->subtitle;
        $blog->category=$request->category;
        $blog->image=$file_name;
        $blog->content=$request->content;
        $blog->content_1=$request->content_1;
        $blog->content_2=$request->content_2;
        $blog->image_1=$file_name1;
        $blog->image_2=$file_name2;
        $blog->save();

        return back()->withInput()->with("Sign Up Success.");
    }


    public function blog_edit(Request $request, $id)
    {
        $fileup = $request->image;
        $path = 'front/img/blog/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path, $file_name);

        $fileup = $request->image_1;
        $path = 'front/img/blog/';
        $file_name1 = $fileup->getClientOriginalName();
        $fileup->move($path, $file_name1);

        $fileup = $request->image_2;
        $path = 'front/img/blog/';
        $file_name2 = $fileup->getClientOriginalName();
        $fileup->move($path, $file_name2);


        $blog =Blog::findOrFail($id);
        $blog->user_id = 3;
//        $blog->blog_category_id=$request->blog_category_id;
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->category = $request->category;
        $blog->image = $file_name;
        $blog->content = $request->content;
        $blog->content_1 = $request->content_1;
        $blog->content_2 = $request->content_2;
        $blog->image_1 = $file_name1;
        $blog->image_2 = $file_name2;
        $blog->save();

        return back()->withInput()->with("Sign Up Success.");
    }

    public function blogid($id){
        $blogedit = Blog::findOrFail($id);
        return view('admin.blog-edit',compact('blogedit'));
    }
}
