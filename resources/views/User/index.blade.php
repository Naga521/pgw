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
        <a href="/my_page2"><h1>{{\Auth::User()->name}}</h1></a>
        <div class='User'>
            <div class='User'>
                {{-- \Illuminate\Support\Facades\Auth::id() --}}
              <div>
                <form action="/search" method="GET">
                  <input type="text" name="keyword" value="{{ $keyword }}">
                  <input type="submit" value="検索">
                </form>
              </div>
                   <h3>ユーザー一覧</h3>
                   @foreach ($users as $user)
                     <a href="/users/{{$user->id}}"><h4 class='home'>{{ $user->name }}</h4></a>
                     @if ($user->icon_path)
      　　　　　　　　　　　　　<!-- 画像を表示 -->
      　　　　　　　　　　　　　　<img src="{{ $user->icon_path }}"  width=100 />
    　　　　　　　　　　　　　　@else
    　　　　　　　　　　　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
    　　　　　　　　　　 @endif

                   @endforeach
                   <h3>グループチャット一覧</h3>
                   @foreach ($chats as $chat)
                   <h3 class='部屋１'>
                   <a href="/chats/{{ $chat->id }}">{{ $chat->room_name }}</a>
                   </h3>
                   
                   <a href="">{{ $chat->name }}</a>
                   @endforeach
                    [<a href='/chats/create_room'>チャットルーム作成</a>]
                   <h3>ダイレクトメッセージ</h3>
                   @foreach ($users as $user)
                   　　    @if($user->name!== \Auth::User()->name)
                   　　  <h2><a href="/dms/{{\Auth::User()->id}}/{{$user->id}}">{{$user->name}}とのメッセージ</a></h2> 
                   　　   @endif
                   
                   @endforeach
            </div>
    </body>
</html>
@endsection