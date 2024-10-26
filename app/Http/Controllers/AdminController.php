<?php

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
        
        $data ->save();
        return redirect()->back();
    }
}
