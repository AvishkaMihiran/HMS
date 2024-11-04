<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\AdminadminController;
namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Booking;
use App\Models\User;
use Notification;
use Illuminate\Http\Request;
use App\Notifications\MyFirstNotification;

class AdminController extends Controller
{
    // Display the admin dashboard
    public function admindashboard()
    {
        return view('admin.admindashboard');
        
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $data = new Room();

        $data ->room_title = $request->title;
        $data ->description = $request->description;
        $data ->price = $request->price;
        $data ->wifi = $request->wifi;
        $data ->room_type = $request->type;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function view_room() {
        $data = Room::all(); 
        return view('admin.view_room', compact('data'));
    }

    public function room_delete($id) {
        $data = Room::find($id);
        if ($data) {
            $data->delete();  // Delete the room instance
        } else {
            // Optionally, you could add a flash message if the room was not found
            return redirect()->back()->with('error', 'Room not found');
        }
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Room deleted successfully');
    
    }

    public function update_room($id){
        $data = Room::find($id);
        return view('admin.update_room', compact('data'));
    }

    public function edit_room(Request $request, $id)
    {
        $data = Room::find($id);
        $data ->room_title = $request->title;
        $data ->description = $request->description;
        $data ->price = $request->price;
        $data ->wifi = $request->wifi;
        $data ->room_type = $request->type;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function boking_aprove() {
        $bookings = Booking::all(); 
        return view('admin.boking_aprove');

    }

    public function boking_delete($id) {
        $bookings = Booking::find($id);
        if ($bookings) {
            $bookings->delete();  // Delete the room instance
        } else {
            // Optionally, you could add a flash message if the room was not found
            return redirect()->back()->with('error', 'Room not found');
        }
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Room deleted successfully');
    
    }

    public function boking_aproved($id) {
        $bookings = Booking::find($id); 
        $bookings->status = 'Approved';
        $bookings->save();
        return redirect()->back()->with('success', 'Room approve successfully');

    }

    public function boking_reject($id) {
        $bookings = Booking::find($id); 
        $bookings->status = 'Rejected';
        $bookings->save();
        return redirect()->back()->with('success', 'Room reject successfully');

    }

    public function all_msg() {
        $users = User::all(); 
        return view('admin.all_msg', compact('users'));
   }

   public function send_mail($id)
    {
    $users = User::find($id);

    if (!$users) {
        return redirect()->back()->with('error', 'Booking not found');
    }

    return view('admin.send_mail', compact('users'));
}

public function mail(Request $request, $id)
{
    // Retrieve the single user instance by ID
    $user = User::find($id);

    // Define the details array for the notification
    $details = [
        'greeting' => $request->greeting,
        'body' => $request->body,
        'action_text' => $request->action_text,
        'action_url' => $request->action_url,
        'endline' => $request->endline,
    ];

    // Send the notification to the user
    Notification::send($user, new MyFirstNotification($details));
    
    return redirect()->back()->with('success', 'Mail sent successfully.');
}

public function table() {
    $data = Room::all(); 
    return view('admin.table', compact('data'));
}

   

}
