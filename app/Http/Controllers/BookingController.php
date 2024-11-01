<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Method to store bookings
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'package' => 'required|string',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'rooms' => 'required|integer|min:1', // Validate that rooms is a positive integer
        ]);

        // Create a new booking record in the database
        Booking::create([
            'user_id' => auth()->id(), // Assumes the user is logged in
            'package' => $request->input('package'),
            'check_in_date' => $request->input('check_in_date'),
            'check_out_date' => $request->input('check_out_date'),
            'rooms' => $request->input('rooms'), // Store the number of rooms
        ]);

        // Redirect to the bookings index page with a success message
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }

    // Method to show bookings
    public function index()
    {
        // Get bookings for the authenticated user
        $bookings = Booking::where('user_id', auth()->id())->get(); 
        // Return the bookings index view with the booking data
        return view('bookings.index', compact('bookings'));
    } 

    
}