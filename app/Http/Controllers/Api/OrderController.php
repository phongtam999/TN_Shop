<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout( Request $request) {
       
        $address = $request->address;
        $cart = $request->cart;
        $email = $request->email;
        $name = $request->name;
        $note = $request->note;
        $phone = $request->phone;
        $order = new Order();
        $order->customer_id = 1;
        $order->total = 1;
        $order->date_ship = date("Y-m-d");
        $order->date_at = date("Y-m-d");
        $order->note = $note;
        $order->save();

        if(count($cart)>0) {
            foreach ($cart as $key => $cartItem) {
                $OrderDetail = new OrderDetail();
                $OrderDetail->order_id = $order->id;
                $OrderDetail->product_id = (int)$cartItem['product_id'];
                $OrderDetail->amount = $cartItem['quantity'];
                $OrderDetail->total = $cartItem['quantity']* $cartItem['product']['price'];

                $OrderDetail->save();
            }
        }
        
        return response()->json([
            'message' => 'Order successfully registered',
            'order' => $order
        ], 201);



    }
}
