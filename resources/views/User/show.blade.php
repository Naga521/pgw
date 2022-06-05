@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif
<p>名前：{{$user->name}}</p>
<p>ゲーム名（apex)　</p>
<p>レベル500</p>
<p>バトロワランク（マスター）</p>
<p>アリーナランク（プラチナ）</p>
<p>楽しくカジュアル</p>
<p>よろしくお願いします</p>

 <a href="/user">戻る</a>


@endsection