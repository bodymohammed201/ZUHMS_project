<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
   
    public function index()
    {
        $rooms =Room::all();
        return view('Dashboard.Room.empty',compact('rooms'));
    }

   
    public function create()
    {
       
    }

   
    public function store(Request $request)
    {
        
    }

   
    public function show(Room $room)
    {
        //
    }


    public function edit(Room $room)
    {
        //
    }

 
    public function update(Request $request, Room $room)
    {
        //
    }

 
    public function destroy(Room $room)
    {
        //
    }
}
