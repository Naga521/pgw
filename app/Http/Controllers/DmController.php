<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dm;

class DmController extends Controller
{
  public function show(string $id,User $user)
{
  // $messages=$dms->where('user_id', $user)->get();
  return view('Dm/show')->with(['user'=>$user]);
}
public function create($id)
{
  return view('Dms/create')->with(["id"=>$id]);
}   
public function store(Request $request, Dm $dm)
  {
    $input = $request['dm'];
    //$input += ['user_id' => $request->user()->id];
    $dm->fill($input)->save();
    return redirect('/dms/'.$input['user_id'].'/' . $input["to_id"]);
  }
}
