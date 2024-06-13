<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Profile;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::orderBy('id','desc')->get();
        return view('messages.listar',compact('messages'));
    }

    public function create(){
        $profiles = Profile::all();
        return view('messages.create', compact('profiles'));
    }

    public function store(Request $request){

        $message = new Message();
        $message->content=$request->content;
        $message->state=$request->state;
        $message->profile_id=$request->profile_id;
        $message->save();

        return $message;
    }

    public function show(Message $message){
        return view('messages.show',compact('message'));
    }

    public function destroy (Message $message){
        $message->delete();
        return redirect()->route('message.index');
    }

    public function edit(Message $message){
        return view('messages.edit',compact('message'));
    }


    public function update(Request $request, Message $message){

        $message->content=$request->content;
        $message->state = $request->state;
        $message->save();

        return redirect()->route('messages.index');
    }

    }


