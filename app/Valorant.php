<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valorant extends Model
{
     protected $fillable = [
        'name', 'email', 'password','level','rank','offer',
    ];
}
