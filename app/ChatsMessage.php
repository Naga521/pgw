<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class ChatsMessage extends Model
{
  public function chat()   
  {
    return $this->belongsTo('App\Chats','chat_id');  
  }

public function user()   
{
  return $this->belongsTo('App\User', 'user_id');  
}
protected $fillable = [
    'user_id', 'chat_id', 'message',
  ];
public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
  
}
