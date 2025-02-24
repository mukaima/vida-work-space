<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
   
    public function store(Request $request)
    {
         // get the Message info to store
            $minfo = $request->all();


        // store the Message info 
          $message = new Message();
          
          $message->name = $minfo['name'] ;
          $message->email = $minfo['email'] ;
          $message->message = $minfo['message'] ;
          $message->created_at = " " ; 
          $message->updated_at = " " ;
          $message->save();
          return redirect()->back()->with('success', 'Message sent successfully!');




    }

}
