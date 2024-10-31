<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Display the admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
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
}
