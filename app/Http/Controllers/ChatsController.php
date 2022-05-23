<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chats;
use App\ChatsMessage;

class ChatsController extends Controller
{
public function show(Chats $chats, ChatsMessage $chatsmessage)
{
    $chatsmessages=$chatsmessage->with('user')->where('chat_id', $chats->id)->get();
    return view('chats/show')->with(['chat' => $chats, 'chatsmessages'=>$chatsmessages]);
}
    
}