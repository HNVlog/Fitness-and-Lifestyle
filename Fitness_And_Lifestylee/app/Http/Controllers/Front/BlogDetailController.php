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

        $blog = Blog::all();
        $blogs = Blog::orderBy('id', 'desc')->get();
        $blogComments = BlogComment::all();
        $blogCategories = BlogCategory::all();
        $blogImages = ProductImage::all();

        $category = $request->input('category');
        if ($category <> "All" && !is_null($category)){
            // Check category != null and != all, then not using where
            $blogs = $blogs->where("category", '=', $category);
        }

//          Nếu cần phân trang thì mới sử dụng đoạn code này
        $page = $request->input('page');
        if (is_null($page)){
            $page = 1;
        }

        $Product_Id = $request -> input('Product_Id');
        if (is_null($Product_Id)) {
            $Product_Id = 1;
        }

        $blog = $blogs[$page-1];
        $blogImage = $blogImages->where('product_id', '=', $Product_Id)->first();
//////        $blogs = $blogs[$page-1];
        $blogComment = $blogComments->where('blog_id', '=', $Product_Id)->first();
////        $blogCategorie = $blogCategories[$page-1];

        return view('front.blog.show', compact('blog','blogs','blogCategories','blogComment', 'page', 'blogImage'));
    }

    public function category($categoryName,Request $request){
        $blogCategoriess = BlogCategory::all();

        $products = BlogCategory::where('name',$categoryName)->first()->products->toQuery()->paginate();

        return view('front.blog.show', compact( 'products' ,'blogCategoriess'));

    }
}
