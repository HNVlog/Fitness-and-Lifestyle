<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index( ){

        $blogCategoriess = BlogCategory::all();
        $blogs = Blog::orderBy('id', 'desc')->get();

        $blogss = Blog::orderBy('id', 'desc')->limit(3)->get();

        $bloggs = Blog::paginate(3);

        $blogComments = BlogComment::all();
        $blogCategories = BlogCategory::all();

        return view('front.blog.index', compact('blogs', 'blogComments', 'blogCategories', 'blogss', 'bloggs','blogCategoriess'));
    }

    public function search(Request $request){
        $search = $request->search ?? '';
        $blogs = Blog::where('title', '%' . $search . '%');

        return view('front.blog.index', compact('blogs'));
    }

    public function category($categoryName,Request $request){
        $blogCategoriess = BlogCategory::all();

        $products = BlogCategory::where('name',$categoryName)->first()->products->toQuery()->paginate();

        return view('front.blog.index', compact( 'products' ,'blogCategoriess'));

    }
}
