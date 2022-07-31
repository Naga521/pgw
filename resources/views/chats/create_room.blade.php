<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">           
@extends('layouts.app')

@section('content')
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css/chatscreatecss.css') }}" rel="stylesheet">
</head>
<body>
  <script src="{{mix('js/room.js')}}" defer>
 </script>
  <div class="d-flex justify-content-center">
    <div>
      <h1>チャット部屋作成</h1>
    </div>
  </div>
  <form action="/chats/redirect" id= room method="POST">
    @csrf
    <div class="body">
      <div class="d-flex justify-content-center">
        <textarea name="chat[room_name]" placeholder="部屋名を入力">{{ old('chat.message') }}</textarea>
        <p class="body__error" style="color:red">{{ $errors->first('chat.message') }}</p>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="button005">
      <button id="create_room">部屋作成</button>
      <p id="txt"></p>
    </div>
    </div>
  </form>
  <div class="buttonGroup">
    <div class="button06">
      <div class="戻る">
        <a href="/user">戻る</a>
      </div>
    </div>
  </div>
</body>
@endsection
</html>