<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function showBills()
    {
        $ordersGroupedByUser = DB::table('orders')
            ->select('user_id', 'item_name', 'price', 'quantity', 'total')
            ->get()
            ->groupBy('user_id'); // Group by user ID

        return view('receptionist.bill', compact('ordersGroupedByUser'));
    }
}
