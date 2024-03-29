<?php


namespace App\Http\Controllers\Front;


use App\Models\ClassesDetail;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index(){
        $classProducts = Product::limit(3)->get();
        $classDetails = ClassesDetail::limit(4)->get();
        $ProductCategories = ProductCategory::limit(6)->get();
        $productCategoryImg = ProductCategory::all();


        return view('front.index', compact('classProducts', 'classDetails', 'ProductCategories', 'productCategoryImg'));
    }


}
