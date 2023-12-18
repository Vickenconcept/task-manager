<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::latest()->get();
        return view('order', compact('orders'));
    }
    public function update(Request $request, Order $order){

        $order->status = $request->input('status') ;
        $order->update();
        return back()->with('success','Updated Successfully');
    }
}
