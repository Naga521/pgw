<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pgw</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href="/my_page2"><h1>Teruya</h1></a>
        <div class='User'>
            <div class='User'>
                {{-- \Illuminate\Support\Facades\Auth::id() --}}
                <a href="/"><h2>アカウント検索</h2></a>
                 <a href="/"><h3>フレンドユーザー一覧</h3></a>
                   <a href="/"><h3>ユーザー一覧</h3></a>
                   @foreach ($users as $user)
                     <a href="/"><h4 class='home'>{{ $user->name }}</h4></a>
                     @if ($user->image_path)
      　　　　　　　　　　　　　<!-- 画像を表示 -->
      　　　　　　　　　　　　　　<img src="{{ $user->image_path }}" width=100>
    　　　　　　　　　　　　　　@endif
                    </div>
                   @endforeach
                   <h3>グループチャット一覧</h3>
                   @foreach ($chats as $chat)
                   <a href="/chats/{{$chat->id}}"><h4 class='home'>{{ $chat->room_name}}</h4></a>
                   
                   <h3 class='部屋１'>
                   <a href="/chats/{{ $chat->id }}">{{ $chat->title }}</a>
                   </h3>
                   @endforeach
            </div>
            <div class='paginate'>
            {{ $users->links() }}
        </div>
    </body>
</html>
@endsection