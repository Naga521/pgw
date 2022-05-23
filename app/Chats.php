<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
public function chatsmessage()
{
  return $this->hasMany('App\ChatsMessage','chat_id');
}
}
