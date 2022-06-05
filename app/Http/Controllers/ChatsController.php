<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chats;
use App\ChatsMessage;

class ChatsController extends Controller
{
public function show(Chats $chats)
{
    $chatsmessage=$chats->chatsmessage();
    $chatsmessages=$chatsmessage->where('room_id', $chats->id)->get();
    return view('chats/show')->with(['chat' => $chats, 'chatsmessages'=>$chatsmessages]);
}
    
}