<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\BlogDetail;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function show(Request $request){

//        $blog = Blog::all();
        $blogs = Blog::orderBy('id', 'desc')->get();
        $blogComments = BlogComment::orderBy('id', 'desc')->limit(3)->get();
        $blogCategories = BlogCategory::all();
        $blogImages = ProductImage::all();

        $category = $request->input('category');
        if ($category <> "All" && !is_null($category)){
            // Check category != null and != all, then not using where
            $blogs = $blogs->where("category", '=', $category);
        }

        $page = $request->input('page');
        if (is_null($page)){
            $page = 1;
        }

        $Product_Id = $request -> input('Product_Id');
        if (is_null($Product_Id)) {
            $Product_Id = 1;
        }

        $blog = $blogs->where('blog_category_id', '=', $Product_Id)->first();
        $blogImage = $blogImages->where('blog_id', '=', $Product_Id)->first();
        $blogComment = $blogComments->where('product_id', '=', $Product_Id)->all();
////        $blogCategorie = $blogCategories[$page-1];

        return view('front.blog.show', compact('blog','blogs','blogCategories','blogComments', 'page', 'blogImage'));
    }

    public function category($categoryName,Request $request){
        $blogCategoriess = BlogCategory::all();

        $products = BlogCategory::where('name',$categoryName)->first()->products->toQuery()->paginate();

        return view('front.blog.show', compact( 'products' ,'blogCategoriess'));

    }

    //     Post Comments
    public function postComment(Request $request){
        $request ->validate([
            'name'=>'required',
            'email'=>'required',
            'messages'=>'required',
            'rating'=>'required',
            'blog_id'=>'required',
        ]);
        BlogComment::create($request->all());
        return redirect()->back();
    }
}
