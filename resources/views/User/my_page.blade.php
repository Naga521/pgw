@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<div class="form-group row">
    <a>マイページ</a>
    <a href="/my_page2/edit">変更</a>
</div>
@php
    $apex=\Auth::User()->apex()->get()[0];
    $valo=\Auth::User()->valorant()->get()[0];
    $cod=\Auth::User()->cod()->get()[0];
@endphp
<div>
    @if (\Auth::User()->icon_path)
     　<!-- 画像を表示 -->
      　<img src="{{ \Auth::User()->icon_path }}"  width=100 />
    @else
    　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
    @endif
</div>
<div>
    <p>APEX</p>
    <p>{{ $apex->level }}</p>
    <p>{{ $apex->battle_royale_rank }}</p>
    <p>{{ $apex->arena_rank }}</p>
    <p>{{ $apex->offer }}</p>
</div>

<div>
    <p>VALORANT</p>
    <p>{{ $valo->level }}</p>
    <p>{{ $valo->rank }}</p>
    <p>{{ $valo->offer }}</p>
</div>
<div>
    <p>CoD</p>
    <p>{{ $cod->level }}</p>
    <p>{{ $cod->rank }}</p>
    <p>{{ $cod->offer }}</p>
</div>

<div class='戻る'>[<a href='/user'>戻る</a>]</div>
    

@endsection