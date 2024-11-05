<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KitchenOrdersController extends Controller
{
    public function showKitchenOrders() {
        $orders = DB::table('orders')->get();
        return view('receptionist.kitchen-orders', compact('orders'));

    }
}

