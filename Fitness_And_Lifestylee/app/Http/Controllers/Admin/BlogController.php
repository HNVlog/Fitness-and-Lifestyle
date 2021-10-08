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

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }


        $fileup = $request->image;
        $path = 'front/img/blog/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name);



        $blog=new Blog();
        $blog->user_id = 3;
//        $blog->blog_category_id=$request->blog_category_id;
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->category = $request->category;
        $blog->image = $file_name;
        $blog->content = $request->content;
        $blog->content_1 = null;
        $blog->content_2 = null;
        $blog->image_1 = null;
        $blog->image_2 = null;
        $blog->save();

        return back()->withInput()->with("Sign Up Success.");
    }


    public function blog_edit(Request $request, $id)
    {
        $fileup = $request->image;
        $path = 'front/img/blog/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path, $file_name);



        $blog =Blog::findOrFail($id);
        $blog->user_id = 3;
//        $blog->blog_category_id=$request->blog_category_id;
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->category = $request->category;
        $blog->image = $file_name;
        $blog->content = $request->content;
        $blog->content_1 = null;
        $blog->content_2 = null;
        $blog->image_1 = null;
        $blog->image_2 = null;
        $blog->save();

        return back();
    }

    public function blogid($id){
        $blogedit = Blog::findOrFail($id);
        return view('admin.blog-edit',compact('blogedit'));
    }
}
