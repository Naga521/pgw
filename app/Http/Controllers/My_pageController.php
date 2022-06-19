<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Apex;
use App\Valorant;
use App\Cod;


class My_pageController extends Controller
{
  public function index()
    {
      $id = Auth::id();
      $user = DB::table('users')->find($id);
      return view('User/my_page', ['my_user' => $user]);
    }
    public function my_page_update(Request $request)
    {
      if($request->hasFile('top_image')) 
      {
          $id = Auth::id();
          $photo_path = $request->file('top_image')->store('public/top_file');
          $top_image_pass2 = basename($photo_path);
          // DBの対象カラムを更新する
          $affected = DB::table('users')
                    ->where('id', $id)
                    ->update(['profile_photo_path' => $top_image_pass2]);
          // 画像に表示させる
          return redirect("/my_page2")->with([
                "message" => "マイページ画像を変更しました。",
                "top_image_pass" => $top_image_pass2 
            ]);
        {
          $users = User::all();

          return view('users.index', ['users' => $users]);
        }
      }
    }
    public function edit()
      {
        $user=Auth::user();
        return view('User/my_page_edit')->with(['user' => $user]);
      }
      public function update(Request $request, Apex $apex, Valorant $valorant, Cod $cod,User $user)
        {
          //$input_user["id"]=\Auth::User()->id;
          $input_user=[];
          $input_apex = $request['apex'];
          if($input_apex["id"]!=-1){
          $apex::find($input_apex['id'])->fill($input_apex)->save();
          }else{
            $input_apex["id"]=count($apex->get());
            $apex->fill($input_apex)->save();
             $input_user["apex_user_id"]=$input_apex["id"];
          }
          $input_valorant = $request['valorant'];
          if($input_valorant["id"]!=-1){
         $valorant::find($input_valorant['id'])->fill($input_valorant)->save();
          }else{
            $input_valorant["id"]=count($valorant->get());
            $valorant->fill($input_valorant)->save();
             $input_user["valorant_user_id"]=$input_valorant["id"];
          }
            
          $input_cod = $request['cod'];
          if($input_cod["id"]!=-1){
         $cod::find($input_cod['id'])->fill($input_cod)->save();
          }else{
            $input_cod["id"]=count($cod->get());
            $cod->fill($input_cod)->save();
            $input_user["cod_user_id"]=$input_cod["id"];
          }
          $user::find(\Auth::User()->id)->fill($input_user)->save();
          
          
          $id = Auth::id();
          $user = DB::table('users')->find($id);
          return view('User/my_page', ['my_user' => $user]);
        }
   
}
