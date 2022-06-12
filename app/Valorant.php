<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valorant extends Model
{
     protected $fillable = [
        'level','rank','offer','created_at'
    ];
}
