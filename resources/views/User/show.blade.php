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
    
<div class="d-flex justify-content-center">
  <div class="d-flex flex-row bd-highlight mb-3">
     <div class="p-2 bd-highlight">
        <div class="border border-dark" style="padding:10px;">
          <p>apex</p>
          <p>レベル:{{$user->apex()->get()[0]->level}}</p>
          <p>バトロワランク:{{$user->apex()->get()[0]->battle_royale_rank}}</p>
          <p>アリーナランク:{{$user->apex()->get()[0]->arena_rank}}</p>
          <p>offer:{{$user->apex()->get()[0]->offer}}</p>
        </div>
     </div>
     
     <div class="p-2 bd-highlight">
       <div class="border border-dark" style="padding:10px;">
         <p>valorant</p>
         <p>レベル:{{$user->valorant()->get()[0]->level}}</p>
         <p>ランク:{{$user->valorant()->get()[0]->rank}}</p>
         <p>offer:{{$user->valorant()->get()[0]->offer}}</p>
       </div>
     </div>

     <div class="p-2 bd-highlight">
       <div class="border border-dark" style="padding:10px;">
         <p>cod</p>
         <p>レベル:{{$user->cod()->get()[0]->level}}</p>
         <p>ランク:{{$user->cod()->get()[0]->rank}}</p>
         <p>offer:{{$user->cod()->get()[0]->offer}}</p>
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