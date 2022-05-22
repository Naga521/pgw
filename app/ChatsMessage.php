<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class ChatsMessage extends Model
{
public function chat()   
{
return $this->belongsTo('App\Chats');  
}

public function create(Category $category)
{
    return view('posts/create')->with(['categories' => $category->get()]);;
}
}
