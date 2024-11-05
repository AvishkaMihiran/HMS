<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Auth;
use Carbon\Carbon;
use App\Models\Room;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'room_title' => 'required',
            'room_type' => 'required',
            'availabale' => 'required|integer',
            'check_in_date' => 'required|date|after_or_equal:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'num_rooms' => 'required|integer|min:1',
            'price' => 'required|numeric',
        ]);

        // Create a new booking
        Booking::create([
            'username' => Auth::user()->name,  // Assuming the user is logged in
            'room_title' => $request->room_title,
            'room_type' => $request->room_type,
            'availabale' => $request->availabale,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'num_rooms' => $request->num_rooms,
            'price' => $request->price,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Booking Success!');
    }

    public function booking()
    {
        $data = Room::all(); 
        return view('booking', compact('data'));

        $roomData = DB::table('rooms')->select('room_title', 'price')->get();
        return view('booking_form', ['data' => $roomData]);
        
        $roomData = DB::table('rooms')->select('room_type', 'price')->get();
        return view('booking_form', ['data' => $roomData]);
    }
}
