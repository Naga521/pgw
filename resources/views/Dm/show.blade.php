@extends('layouts.app')
@section('content')
@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

@php
$dm_to=$user->Dms_to()->get();
$dm_from=$user->Dms_from()->get();
$dms=$dm_to->concat($dm_from);
$dms=$dms->sortBy("created_at");
@endphp

 <h1 class="dm_title">
   {{ $user->name}}
 </h1>
@foreach($dms as $dm)
@if($dm->user_id===\Auth::User()->id)
<div>
<p>{{\Auth::User()->name}}→{{$user->name}}：{{$dm->created_at}}</p>
<a>{{$dm->message}}</a>
</div>
<hr>
@elseif($dm->to_id===\Auth::User()->id)
<div>
<p>{{$user->name}}→{{\Auth::User()->name}}：{{$dm->created_at}}</p>
<a>{{$dm->message}}</a>
</div>
<hr>
@endif
@endforeach

<form action="/dms/{{\Auth::User()->id}}/{{ $user->id }}" method="POST">
 @csrf
 <p>
  コメント：<br>
  <textarea name="dm[message]" cols="50" rows="5" placeholder="コメント内容"　required></textarea>
  <input type="hidden" name="dm[user_id]", value={{\Auth::User()->id}} required></input>
  <input type="hidden" name="dm[to_id]", value={{$user->id}}></input>
 </p>
 <button type="submit">書き込む</button>
</form>

 <a href="/user">戻る</a>
@endsection