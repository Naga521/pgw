<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class ChatsMessage extends Model
{
public function chat()   
{
return $this->belongsTo('App\Chats','room_id');  
}

public function user()   
{
return $this->belongsTo('App\User', 'user_id');  
}

public function create(Category $category)
{
    return view('posts/create')->with(['categories' => $category->get()]);;
}
}
