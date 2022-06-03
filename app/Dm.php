<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dm extends Model
{
public function user()
{
  return $this->belongsTo('App\User');
}
}
