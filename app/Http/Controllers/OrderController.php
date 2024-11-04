<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cartItems = $request->input('cart');

        foreach ($cartItems as $item) {
            Order::create([
                'item_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'total' => $item['total'],
                'user_id' => auth()->id() // Assumes user is logged in
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Order placed successfully!']);
    }


            // In OrderController.php
            public function showOrders()
    {
                    $orders = Order::all();
                     return view('cook', compact('orders'));
                        }

            public function completeOrder($id)
                    {
                    $order = Order::find($id);
                    if ($order) {
                        $order->delete();
                    }
    return response()->json(['success' => true]);
    }

}


