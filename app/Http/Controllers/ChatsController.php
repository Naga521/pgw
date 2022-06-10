<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chats;
use App\ChatsMessage;
//use App\Http\Controllers\Chat;
use App\Http\Requests\ChatsRequest;

class ChatsController extends Controller
{
public function show(Chats $chats)
{
    $chatsmessage=$chats->chatsmessage();
    $chatsmessages=$chatsmessage->where('chat_id', $chats->id)->get();
    return view('chats/show')->with(['chat' => $chats, 'chatsmessages'=>$chatsmessages]);
}
 public function create($id)
{
    return view('chats/create')->with(["id"=>$id]);
}   
public function store(ChatsRequest $request, Chats $chat, ChatsMessage $chatsmessages)
{
    $input = $request['chat'];
    $input += ['user_id' => $request->user()->id];
    // $input += ['chat_id'? => $chat->id];
    $chatsmessages->fill($input)->save();
    return redirect('/chats/' . $input["chat_id"]);
}
}