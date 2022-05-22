<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Chats;
use Storage;

class UserController extends Controller
{
public function index(User $user, Chats $chats)
{
    return view('User/index')->with(['users' => $user->getPaginateByLimit(),"chats"=>$chats->get()]);
}
 public function create(Request $request)
  {
      $user = Auth::user();
      $form = $request->all();

      $image = $request->file('top_image');
      $path = Storage::disk('s3')->putFile('/', $image, 'public');
      $user->image_path = Storage::disk('s3')->url($path);
      $user->save();

      return redirect('/my_page2');}
}
