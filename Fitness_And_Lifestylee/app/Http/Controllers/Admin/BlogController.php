<?php

namespace App\Http\Controllers\Admin;

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

//        $image = $request->file('image');
//        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
//        $destinationPath = public_path('/front/img');
//        $image->move($destinationPath, $input['imagename']);
        $blog=new Blog();
        $blog->user_id=3;
        $blog->title=$request->title;
        $blog->subtitle=$request->subtitle;
        $blog->category=$request->category;
        $blog->image=$request->image;
        $blog->content=$request->content;
        $blog->content_1=$request->content_1;
        $blog->content_2=$request->content_2;
        $blog->image_1=$request->image_1;
        $blog->image_2=$request->image_2;
        $blog->save();

        return back()->withInput()->with("Sign Up Success.");
    }

}
