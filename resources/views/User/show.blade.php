@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif
<p>名前：{{$user->name}}</p>
<p>ゲーム名（apex)　</p>
<p>レベル:{{$user->apex()->get()[0]->level}}</p>
<p>バトロワランク:{{$user->apex()->get()[0]->battle_royale_rank}}</p>
<p>アリーナランク:{{$user->apex()->get()[0]->arena_rank}}</p>
<p>offer:{{$user->apex()->get()[0]->offer}}</p>


 <a href="/user">戻る</a>


@endsection