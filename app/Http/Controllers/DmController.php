<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DmController extends Controller
{
  public function show(string $id,User $user)
  {
    return view('User/Dm/show')->with(['user' => $user]);
  }
}
