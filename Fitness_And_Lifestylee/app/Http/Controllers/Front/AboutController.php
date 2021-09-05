<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AboutController extends Controller
{
    public function index() {
        $classProducts = Product::where('featured',true)->where('product_category_id', 1)->limit(3)->get();

        return view('front.about.index', compact('classProducts'));
    }
}
