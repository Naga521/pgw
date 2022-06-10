<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>チャット</h1>
        <form action="/chats" method="POST">
            @csrf
            <div class="body">
                <textarea name="chat[message]" placeholder="コメントする">{{ old('chat.message') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('chat.message') }}</p>
            </div>
            <input value="{{$id}}" name="chat[chat_id]" style="display:none"/>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>