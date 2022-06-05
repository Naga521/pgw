@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<h3>{{\Auth::User()->name}}から{{$user->name}}へのメッセージ</h3>
@foreach($user->Dms_to()->get() as $dm)
@if($dm->user_id===\Auth::User()->id)
{{$dm->message}}
@endif
@endforeach

<h3>{{$user->name}}から{{\Auth::User()->name}}へのメッセージ</h3>
@foreach($user->Dms_from()->get() as $dm)
@if($dm->to_id===\Auth::User()->id)
{{$dm->message}}
@endif
@endforeach

 <a href="/user">戻る</a>

@endsection