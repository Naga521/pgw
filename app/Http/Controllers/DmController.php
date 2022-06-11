<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DmController extends Controller
{
  public function show(Dms $dms)
{
    $chatsmessage=$dms->chatsmessage();
    $chatsmessages=$chatsmessage->where('chat_id', $dms->id)->get();
    return view('dms/show')->with(['dm' => $dms, 'chatsmessages'=>$chatsmessages]);
}
  public function create($id)
{
    return view('Dms/create')->with(["id"=>$id]);
}   
  public function store(ChatsRequest $request, Dm $dm, ChatsMessage $chatsmessages)
{
    $input = $request['dm'];
    $input += ['user_id' => $request->user()->id];
    $chatsmessages->fill($input)->save();
    return redirect('/dms/' . $input["to_id"]);
}
}
