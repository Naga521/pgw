<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apex extends Model
{
    protected $fillable = [
        'name', 'email', 'password','level','battle_royale_rank','arena_rank','offer',
    ];

}
