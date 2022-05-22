<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chats;

class ChatsController extends Controller
{
public function show(Chats $chats)
{
    return view('chats/show')->with(['chat' => $chats]);
}
    
}