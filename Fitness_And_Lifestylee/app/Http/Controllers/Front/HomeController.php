<?php


namespace App\Http\Controllers\Front;


use App\Models\Product;

class HomeController
{
public function index(){
    $classProducts = Product::where('featured',true)->where('product_category_id',1)->limit(3)->get();


    return view('front.index', compact('classProducts'));
}
}
