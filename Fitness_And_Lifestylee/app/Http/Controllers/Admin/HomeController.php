<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Commentcheck;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $classes=Product::all();
        $blog=Blog::all();
        $cmt=Commentcheck::all();
        $user=User::all();

        return view('admin.index',compact('classes','blog','cmt','user'));
    }

}
