<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{ $chat->room_name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
        <body>
        <h1 class="chat_title">
            {{ $chat->room_name }}
        </h1>
        <div class="content">
            <div class="content__chat">
                @php
                $chatsmessages=$chat->chatsmessage
                @endphp
                @foreach($chatsmessages as $chatmessage)
                <h3>本文</h3>
                <p>{{ $chatmessage->id }}</p>
                <p>{{ $chatmessage->message }}</p>
                
                @endforeach
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>