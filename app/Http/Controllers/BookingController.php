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
            'room_title' => 'required|string|max:255',
            'room_type' => 'required|string|max:255',
            'avilable' => 'required|integer|min:1',
            'check_in_date' => 'required|date|after_or_equal:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'num_rooms' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Create a new booking
        Booking::create([
            'username' => $request->username, // Ensure this is retrieved correctly
            'room_title' => $request->room_title,
            'room_type' => $request->room_type,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'num_rooms' => $request->num_rooms,
            'price' => $request->price,
        ]);

        // Redirect to success page
        return redirect()->route('booking.success');
    }

    public function success()
    {
        return view('booking-success'); // Make sure you have this view created
    }
}
