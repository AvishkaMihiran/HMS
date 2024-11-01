<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'username' => 'required|string|max:255',
            'package' => 'required|string|max:255',
            'check_in_date' => 'required|date|after_or_equal:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'rooms' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);

        // Create a new booking
        Booking::create([
            'username' => $request->username, // Ensure this is retrieved correctly
            'package' => $request->package,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'rooms' => $request->rooms,
            'total_price' => $request->total_price,
        ]);

        // Redirect to success page
        return redirect()->route('booking.success');
    }

    public function success()
    {
        return view('booking-success'); // Make sure you have this view created
    }
}
