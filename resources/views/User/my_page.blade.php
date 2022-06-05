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
    <p>APEX</p>
    <p>{{ $apex->battle_royale_rank }}</p>
    <p>{{ $apex->arena_rank }}</p>
    <p>{{ $apex->offer }}</p>
</div>

<div>
    <p>VALORANT</p>
    <p>{{ $valo->rank }}</p>
    <p>{{ $valo->offer }}</p>
</div>
<div>
    <p>CoD</p>
    <p>{{ $cod->rank }}</p>
    <p>{{ $cod->offer }}</p>
</div>
<div class='戻る'>[<a href='/user'>戻る</a>]</div>
    

@endsection