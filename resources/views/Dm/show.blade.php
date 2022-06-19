@extends('layouts.app')
@section('content')
<head> 
  <link href="{{ asset('css/dmshowcss.css') }}" rel="stylesheet">
</head>

@if (Session::has('message'))
  <p>{{ session('message') }}</p>
@endif

@php
  $dm_to=$user->Dms_to()->get();
  $dm_from=$user->Dms_from()->get();
  $dms=$dm_to->concat($dm_from);
  $dms=$dms->sortBy("created_at");
@endphp

<div class="d-flex justify-content-center">
  <h1 class="dm_title">
    {{ $user->name}}とのメッセージ
  </h1>
</div>
@foreach($dms as $dm)
@if($dm->user_id===\Auth::User()->id)
  <div style="text-align:right">
    <p>{{\Auth::User()->name}}：{{$dm->created_at}}</p>
    <h3><a>{{$dm->message}}</a></h3>
  </div>
  <hr>
  @elseif($dm->to_id===\Auth::User()->id)
  <div>
    <p>{{$user->name}}：{{$dm->created_at}}</p>
    <h3><a>{{$dm->message}}</a></h3>
  </div>
  <hr>
@endif
@endforeach

<form action="/dms/{{\Auth::User()->id}}/{{ $user->id }}" method="POST">
  @csrf
  <p>
    DM：<br>
    <textarea name="dm[message]" cols="50" rows="5" placeholder="チャット内容を入力"　required></textarea>
    <input type="hidden" name="dm[user_id]", value={{\Auth::User()->id}} required></input>
    <input type="hidden" name="dm[to_id]", value={{$user->id}}></input>
  </p>
  <button type="submit">送信</button>
</form>

  <div class="button01">
    <div class="back">
      <a href="/user">戻る</a>
    </div>
</div>
@endsection