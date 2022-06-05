<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApexController extends Controller
{
    //
    public function user()
{
  return $this->belongsTo('App\User');
}
}
