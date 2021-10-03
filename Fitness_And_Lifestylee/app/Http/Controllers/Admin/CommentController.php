<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Commentcheck;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(){
        $comments=BlogComment::all();
        $cmts=Commentcheck::all();

        return view('admin.comment',compact('comments','cmts'));
    }
    public function delete($id){
        BlogComment::destroy($id);
        return back();
    }
    public function deletecheck($id){
        Commentcheck::destroy($id);
        return back();
    }
    public function add($id){
        $cmt=Commentcheck::findOrFail($id);
        $cmtadd=new BlogComment();
        $cmtadd->blog_id=$cmt->blog_id;
        $cmtadd->user_id=$cmt->user_id;
        $cmtadd->email=$cmt->email;
        $cmtadd->name=$cmt->name;
        $cmtadd->messages=$cmt->messages;
        $cmtadd->rating=$cmt->rating;
        $cmtadd->product_id=$cmt->product_id;
        $cmtadd->save();

        Commentcheck::destroy($id);
        return back();
    }
}
