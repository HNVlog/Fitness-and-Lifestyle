<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {

        $blogs = Blog::orderBy('id', 'asc')->get();

        $blogss = Blog::orderBy('id', 'asc')->limit(3)->get();

        $blogComments = BlogComment::orderBy('id', 'desc')->limit(2)->get();

        $blogCategories = BlogCategory::all();



        // Search follow category
        $category = $request->input('category');
        if ($category <> "All" && !is_null($category)){
            // Check category != null and != all, then not using where
            $blogs = $blogs->where("category", '=', $category);
        }

        $page = $request->input('page');
        if (is_null($page)){
            $page = 1;
        }

        $blogs = $blogs->forPage($page, 4)->all();

        return view('front.blog.index', compact('blogs', 'page', 'blogCategories', 'blogComments','blogss'));
    }



    public function category($categoryName,Request $request){
        $blogCategoriess = BlogCategory::all();

        $products = BlogCategory::where('name',$categoryName)->first()->products->toQuery()->paginate();

        return view('front.blog.index', compact( 'products' ,'blogCategoriess'));

    }
}
