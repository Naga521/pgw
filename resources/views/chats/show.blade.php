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
            [<a href='/chats/create/{{$chat->id}}'}>チャット入力</a>]
        <div class="d-flex justify-content-center">
        　　<h1 class="chat_title">
            　　{{ $chat->room_name }}
        　　</h1>
        </div>
        <div class="content">
            <div class="content__chat">
                @foreach($chatsmessages as $chatmessage)
                <p>{{ $chatmessage->user->name }}</p>
                <p>{{ $chatmessage->message }}</p>
                @endforeach
                
            </div>
        </div>
        <div class="footer">
            <div class="buttonGroup">
        <div class="button04">
            <div class="戻る"><a href="/user">戻る</a></div>
        </div>
        </div>
        </div>
    </body>
</html>