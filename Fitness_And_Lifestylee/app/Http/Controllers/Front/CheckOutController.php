<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

class CheckOutController extends Controller
{
    //
    public function index(){
        $carts=Cart::content();
        $total=Cart::total();
        $subtotal=Cart::subtotal();

        return view('front.check_out.index',compact('carts','total','subtotal'));
    }

    public function addOrder(Request $request)
    {
//        Thêm đơn hàng
        $order=Order::create($request->all());

//        Thêm chi tiết đơn hàng
        $carts=Cart::content();

        foreach ($carts as $cart){
            $data=[
                'order_id'=> $order->id,
                'product_id'=>$cart->id,
                'qty'=>$cart->qty,
                'total'=>$cart->price * $cart->qty,
            ];
            OrderDetail::create($data);
        }

//        Xoá giỏ hàng
        Cart::destroy();

//        Trả về kết quả
        return redirect()->route('checkout');
    }
}
