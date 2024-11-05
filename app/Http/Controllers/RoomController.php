<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function showRoomDetails()
    {
        // Retrieve all room details from the 'booking' table
        $rooms = DB::table('rooms')->get();

        // Pass room details to the view
        return view('receptionist.rooms-details-interface', ['rooms' => $rooms]);
    }
}
