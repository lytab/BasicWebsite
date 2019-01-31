<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $rules=[
            'name'=>'required',
            'email'=>'required|email',
            
        ];
        $this->validate($request,$rules);

        //create new message
        $message=new Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->message=$request->message;
        // Save Message
        $message->save();
        // Redirect
        return redirect('/')->with('status','Message Sent');


    }
    public function getMessages(){
        $messages=Message::all();
        return view('messages')->with('messages',$messages);
    }
}
