@extends('layouts.app')

@section('content')
  <head> <link rel="stylesheet" href="./css/mypagecss.css"></head>
  @if (Session::has('message'))
    <p>{{ session('message') }}</p>
  @endif
  
  <div class="d-flex justify-content-center">
    <h1 class="text"> <a>マイページ</a></h1>
  </div>
  @php
  if(count(\Auth::User()->apex()->get())!=0){
   $apex=\Auth::User()->apex()->get()[0];
   }else{
   $apex="";
   }
    if(count(\Auth::User()->valorant()->get())!=0){
   $valo=\Auth::User()->valorant()->get()[0];
   }else{
   $valo="";
   }
  if(count(\Auth::User()->cod()->get())!=0){
   $cod=\Auth::User()->cod()->get()[0];
   }else{
   $cod="";
   }
   
    
  @endphp
  <div class="d-flex justify-content-center">
    @if (\Auth::User()->icon_path)
      <!-- 画像を表示 -->
      <img src="{{ \Auth::User()->icon_path }}"  width=100 />
      @else
      <img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
    @endif
  </div>
  <div class="d-flex justify-content-center">
    <div class="d-flex flex-row bd-highlight mb-3">
      <div class="p-2 bd-highlight">
        <div class="border border-dark" style="padding:10px;">
          <p>APEX</p>
          @if($apex!=="")
          <p>レベル:{{ $apex->level }}</p>
          <p>バトロワランク:{{ $apex->battle_royale_rank }}</p>
          <p>アリーナランク:{{ $apex->arena_rank }}</p>
          <p>求める人:{{ $apex->offer }}</p>
          @endif
        </div>
      </div>

      <div class="p-2 bd-highlight">
        <div class="border border-dark" style="padding:10px;">
          <p>VALORANT</p>
          @if($valo!="")
          <p>レベル:{{ $valo->level }}</p>
          <p>ランク:{{ $valo->rank }}</p>
          <p>求める人:{{ $valo->offer }}</p>
          @endif
        </div>
      </div>
      
      <div class="p-2 bd-highlight">
        <div class="border border-dark" style="padding:10px;">
          <p>CoD</p>
          @if($cod!="")
          <p>レベル:{{ $cod->level }}</p>
          <p>ランク:{{ $cod->rank }}</p>
          <p>求める人:{{ $cod->offer }}</p>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="buttonGroup">
    <div class="button01">
      <div class='戻る'><a href='/user'>戻る</a></div>
    </div>
  </div>
  <div class="buttonGroup1">
    <div class="button01">
      <h1 class="edit"><a href="/my_page2/edit">変更</a></h1>
    </div>
  </div>
@endsection