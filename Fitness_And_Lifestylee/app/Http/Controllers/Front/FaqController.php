<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq() {
        $classProducts = Product::where('featured',true)->where('product_category_id',1)->limit(6)->get();
        return view('front.support.faq',compact('classProducts'));
    }
}
