@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title> {{ $chat->chatsmessage() }}</title> --}}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link href="{{ asset('css/chatsshowcss.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex justify-content-center">
      <h1 class="chat_title">
        {{ $chat->room_name }}
      </h1>
    </div>
    <div class="content">
      <div class="content__chat">
        @foreach($chatsmessages as $chatmessage)
          
          @if($chatmessage->user->id===\Auth::User()->id)
  <div style="text-align:right">
    <p>{{ $chatmessage->user->name }}:{{$chatmessage->created_at}}</p>
          <h3><p>{{ $chatmessage->message }}</p></h3>
  </div>
  <hr>
  @else
  <div>
     <p>{{ $chatmessage->user->name }}:{{$chatmessage->created_at}}</p>
          <h3><p>{{ $chatmessage->message }}</p></h3>
  </div>
  <hr>
@endif
        @endforeach
        {{$chatsmessages->links()}}
      </div>
    </div>
     <form action="/chats" method="POST">
       @csrf
    <p>
      チャット：<br>
      <textarea name="chat[message]" cols="50" rows="5" placeholder="チャット内容を入力"　required></textarea>
      <input type="hidden" name="chat[chat_id]", value={{$chat->id}} required></input>
    </p>
    <button type="submit">送信</button>
  </form>
    <div class="footer">
      <div class="buttonGroup">
        <div class="button04">
          <div class="戻る">
            <a href="/user">戻る</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection