@extends('layouts.app')

@section('content')
<head>　
  <link href="{{ asset('css/usershowcss.css') }}" rel="stylesheet">
</head>

@if (Session::has('message'))
  <p>{{ session('message') }}</p>
@endif
<div class="d-flex justify-content-center">
  @if ($user->icon_path)
　　 <!-- 画像を表示 -->
   　<img src="{{ $user->icon_path }}"  width=100 />
 　　@else
 　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
　 @endif
</div>
<div class="d-flex justify-content-center">
  <h1>名前：{{$user->name}}</h1>
</div>

@if(\Auth::User()->follows()->where('followed_user_id','=', $user->id)->get()->count()!==0)
<form action="/users/{{$user->id}}/unfollow" method=POST>
    @csrf
    <button>unfollow</button>
</form>
@elseif(\Auth::User()->follows()->where('followed_user_id','=', $user->id)->get()->count()===0 && $user->id !== \Auth::User()->id)
<form action="/users/{{$user->id}}/follow" method=POST>
    @csrf
    <button>follow</button>
</form>
@endif
     @php
  if(count($user->apex()->get())!=0){
   $apex=$user->apex()->get()[0];
   }else{
   $apex="";
   }
    if(count($user->valorant()->get())!=0){
   $valo=$user->valorant()->get()[0];
   }else{
   $valo="";
   }
  if(count($user->cod()->get())!=0){
   $cod=$user->cod()->get()[0];
   }else{
   $cod="";
   }
  @endphp
<div class="d-flex justify-content-center">
  <div class="d-flex flex-row bd-highlight mb-3">
     <div class="p-2 bd-highlight">
        <div class="border border-dark" style="padding:10px;">
          <p>apex</p>
           @if($apex!="")
          <p>レベル:{{$user->apex()->get()[0]->level}}</p>
          <p>バトロワランク:{{$user->apex()->get()[0]->battle_royale_rank}}</p>
          <p>アリーナランク:{{$user->apex()->get()[0]->arena_rank}}</p>
          <p>offer:{{$user->apex()->get()[0]->offer}}</p>
          @endif
        </div>
     </div>
     
     <div class="p-2 bd-highlight">
       <div class="border border-dark" style="padding:10px;">
         <p>valorant</p>
         @if($valo!="")
         <p>レベル:{{$user->valorant()->get()[0]->level}}</p>
         <p>ランク:{{$user->valorant()->get()[0]->rank}}</p>
         <p>offer:{{$user->valorant()->get()[0]->offer}}</p>
         @endif
       </div>
     </div>

     <div class="p-2 bd-highlight">
       <div class="border border-dark" style="padding:10px;">
         <p>cod</p>
          @if($cod!="")
         <p>レベル:{{$user->cod()->get()[0]->level}}</p>
         <p>ランク:{{$user->cod()->get()[0]->rank}}</p>
         <p>offer:{{$user->cod()->get()[0]->offer}}</p>
          @endif
       </div>
     </div>
   </div>
 </div>
 <div class="buttonGroup">
   <div class="button05">
     <a href="/user">戻る</a>
   </div>
 </div>
@endsection