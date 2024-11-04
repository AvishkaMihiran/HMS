// app/Http/Controllers/ReceptionistController.php
<?php
use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class ReceptionistController extends Controller
{

    public function getBookingsByDate($date)
    {
        $bookings = Booking::whereDate('check_in_date', '<=', $date)
                            ->whereDate('check_out_date', '>=', $date)
                            ->get(['id', 'room_type', 'check_out_date', 'num_rooms']);
    
        return response()->json($bookings);
    }

}


