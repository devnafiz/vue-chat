<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class ChatController extends Controller
{
   public function chat(){

    return view('chat');
   }


   public function send(Request $request){
    $user =User::find(Auth::user()->id);
    event(new ChatEvent($request->message,$user));
   }
}
