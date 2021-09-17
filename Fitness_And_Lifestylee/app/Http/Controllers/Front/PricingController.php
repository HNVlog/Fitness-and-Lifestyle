<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ClassesDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function pricing(Request  $request){
        $classDetails = ClassesDetail::all();
        $Product_Id = $request -> input('Product_Id');
        if (is_null($Product_Id)) {
            $Product_Id = 1;
        }
        $path = $request -> input('path');
        if (is_null($path)){
            $path = 1;
        }
        $classDetail = $classDetails[$path-1];
        $classProducts = Product::where('featured',true)->where('product_category_id',1)->limit(6)->get();
        return view('front.pages.pricing',compact('classProducts','classDetail'));
    }
}
