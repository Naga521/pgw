<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    protected $fillable = [
        'level','rank','offer','created_at'
    ];
}
