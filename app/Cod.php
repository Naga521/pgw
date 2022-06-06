<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    protected $fillable = [
        'name', 'email', 'password','level','rank','offer',
    ];
}
