<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Retrieve and save each item from the request to the database
        foreach ($request->cart as $item) {
            Order::create([
                'item_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'total' => $item['total'],
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Order placed successfully!']);
    }
}

