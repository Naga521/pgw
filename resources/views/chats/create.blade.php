<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/chatscss.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex justify-content-center">
        <h1>チャット</h1>
        </div>
        <form action="/chats" method="POST">
            @csrf
            <div class="body">
                <div class="d-flex justify-content-center">
                <textarea name="chat[message]" placeholder="チャット内容を入力">{{ old('chat.message') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('chat.message') }}</p>
                </div>
            </div>
            <input value="{{$id}}" name="chat[chat_id]" style="display:none"/>
            <div class="d-flex justify-content-center">
            <input type="submit" value="送信"/>
            </div>
        </form>
        <div class="buttonGroup">
         <div class="button03">
        <div class="back">[<a href="/">戻る</a>]</div>
        </div>
        </div>
    </body>
</html>
@endsection