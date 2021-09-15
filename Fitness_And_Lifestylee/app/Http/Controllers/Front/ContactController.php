<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        $classProducts = Product::where('featured',true)->where('product_category_id', 1)->limit(3)->get();

        return view('front.support.contact',compact('classProducts'));
    }
}
