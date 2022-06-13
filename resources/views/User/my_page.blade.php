@extends('layouts.app')

@section('content')
<head> <link rel="stylesheet" href="./css/mypagecss.css"></head>

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<div class="d-flex justify-content-center">
    <h1 class="text"> <a>マイページ</a></h1>
</div>
<div class="d-flex justify-content-end">
    <h1 class="edit"><a href="/my_page2/edit">変更</a></h1>
</div>
@php
    $apex=\Auth::User()->apex()->get()[0];
    $valo=\Auth::User()->valorant()->get()[0];
    $cod=\Auth::User()->cod()->get()[0];
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
    <p>{{ $apex->level }}</p>
    <p>{{ $apex->battle_royale_rank }}</p>
    <p>{{ $apex->arena_rank }}</p>
    <p>{{ $apex->offer }}</p>
</div>
</div>

<div class="p-2 bd-highlight">
    <div class="border border-dark" style="padding:10px;">
    <p>VALORANT</p>
    <p>{{ $valo->level }}</p>
    <p>{{ $valo->rank }}</p>
    <p>{{ $valo->offer }}</p>
</div>
</div>
<div class="p-2 bd-highlight">
    <div class="border border-dark" style="padding:10px;">
    <p>CoD</p>
    <p>{{ $cod->level }}</p>
    <p>{{ $cod->rank }}</p>
    <p>{{ $cod->offer }}</p>
</div>
</div>
</div>
</div>

<div class='戻る'>[<a href='/user'>戻る</a>]</div>
    

@endsection