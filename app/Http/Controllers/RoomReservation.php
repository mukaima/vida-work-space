<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomReservation extends Controller
{

    public function show(){

        return view('roomReservation');
    }

 
    public function store(Request $request)
    {
        // get data to store 
            $data = $request->all();
            //dd($data);
        // store data 
            $room = new Room();

            $room->name = $data['name'];
            $room->age = $data['age'];
            $room->phone = $data['phone'];
            $room->email = $data['email'];
            $room->created_at = " " ;
            $room->updated_at = " " ;
            $room->save();

            

            return to_route("home");






    }

}
