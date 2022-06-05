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

@foreach($dms as $dm)
@if($dm->user_id===\Auth::User()->id)
<div>
<p>{{\Auth::User()->name}}→{{$user->name}}：{{$dm->created_at}}</p>
<a>{{$dm->message}}</a>
</div>
@elseif($dm->to_id===\Auth::User()->id)
<div>
<p>{{$user->name}}→{{\Auth::User()->name}}：{{$dm->created_at}}</p>
<a>{{$dm->message}}</a>
</div>
@endif
<hr>
@endforeach
 <a href="/user">戻る</a>
@endsection