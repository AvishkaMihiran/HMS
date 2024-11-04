<?php

// app/Http/Controllers/WaiterOrderController.php
namespace App\Http\Controllers;

use App\Models\WaiterOrder;
use Illuminate\Http\Request;

class WaiterOrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'waiter_user_id' => 'required|integer',
            'table_number' => 'required|integer',
            'num_customers' => 'required|integer',
            'order_items' => 'required|array',
        ]);

        $order = WaiterOrder::create([
            'waiter_user_id' => $request->input('waiter_user_id'),
            'table_number' => $request->input('table_number'),
            'num_customers' => $request->input('num_customers'),
            'order_items' => $request->input('order_items'),
        ]);

        return response()->json([
            'success' => true,
            'order' => $order,
        ]);
    }
}

