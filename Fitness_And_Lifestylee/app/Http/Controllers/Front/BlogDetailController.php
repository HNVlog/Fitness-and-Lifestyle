<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\BlogDetail;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function show(Request $request){

        $blog = Blog::all();
        $blogs = Blog::orderBy('id', 'desc')->get();
        $blogComments = BlogComment::all();
        $blogCategories = BlogCategory::all();

        $category = $request->input('category');
        if ($category <> "All" && !is_null($category)){
            // Check category != null and != all, then not using where
            $blogs = $blogs->where("category", '=', $category);
        }

        $page = $request->input('page');
        if (is_null($page)){
            $page = 1;
        }
        return view('front.blog.show', compact('blog','blogs', 'page', 'blogCategories','blogComments'));
    }

    public function category($categoryName,Request $request){
        $blogCategoriess = BlogCategory::all();

        $products = BlogCategory::where('name',$categoryName)->first()->products->toQuery()->paginate();

        return view('front.blog.show', compact( 'products' ,'blogCategoriess'));

    }
}
