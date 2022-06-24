<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Chats;
use Storage;
use App\Http\Requests\UserRequest;
use App\Apex;
use App\Cod;
use App\Valorant;

class UserController extends Controller
{
  public function index(User $user, Chats $chats, Request $request)
  {
    $keyword = ($request)->input('keyword');

        $query = User::query();

        if(!empty($keyword))
        {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }
    
        $users = $query->get();
        return view('User/index')->with(['users' => $users,"chats"=>$chats->get(),"keyword"=>$keyword, "data"=>Auth::user(), 'friends' => Auth::user()->follows()->pluck('name')->toArray()]);
  }
  
  public function create(Request $request)
  {
      $user = Auth::user();
      $image = $request->file('top_image');
      $path = Storage::disk('s3')->putFile('/', $image, 'public');
      $user->icon_path = Storage::disk('s3')->url($path);
      $user->save();

      return redirect('/my_page2');
  }
  
  public function show(User $user)
  {
    return view('User/show')->with(['user' => $user]);
  }
  
   public function store(Request $request)
   {
     $keyword = ($request)->input('keyword');

     $query = User::query();

     if(!empty($keyword)) 
     {
       $query->where('name', 'LIKE', "%{$keyword}%");
     }
     $users = $query->get();
     return view('User/search')->with(['users' => $users]);
    }
    public function update(Request $request, User $user, Apex $apex, Cod $cod, Valorant $valorant)
    {
      $input_cod = $request['cod'];
      $input_apex = $request['apex'];
      $input_valorant = $request['valorant'];
      $input_apex=$apex->find(Auth::id())->getAttributes();
      $input_cod=$cod->find(Auth::id())->getAttributes();
      $input_valorant=$valorant->find(Auth::id())->getAttributes();
      $cod->fill($input_cod)->save();
      $apex->fill($input_apex)->save();
      $valorant->fill($input_valorant)->save();
      return redirect('/my_page2/' . $user->id);
    }
}
