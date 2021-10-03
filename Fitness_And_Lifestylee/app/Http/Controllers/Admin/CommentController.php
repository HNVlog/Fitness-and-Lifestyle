<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(){
        $comments=BlogComment::all();


        return view('admin.comment',compact('comments'));
    }
    public function delete($id){
        BlogComment::destroy($id);
        return back();
    }
}
