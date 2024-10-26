<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookController extends Controller
{
    public function index()
    {
        $orders = Order::whereIn('status', ['pending', 'in_progress'])->get();
        return view('cook', compact('orders'));
    }
}
