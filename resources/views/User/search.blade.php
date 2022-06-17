<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<head>
   <link href="{{ asset('css/searchcss.css') }}" rel="stylesheet">
</head>
<h1>検索結果</h1>
 @foreach ($users as $user)
  <a href="/users/{{$user->id}}"><h1 class='home'>{{ $user->name }}</h1></a>
   @if ($user->image_path)
   <!-- 画像を表示 -->
   　<img src="{{ $user->image_path }}" width=100>
   @endif 
    <div class="buttonGroup">
   <div class="button07">
    <div class="back">
   <a href="/user">戻る</a>
   </div>
   </div>
   </div>
 @endforeach

@endsection