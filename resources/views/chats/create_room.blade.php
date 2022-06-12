<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>チャット部屋作成</h1>
        <form action="/chats/redirect" method="POST">
            @csrf
            <div class="body">
                <textarea name="chat[room_name]" placeholder="コメントする">{{ old('chat.message') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('chat.message') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/user">戻る</a>]</div>
    </body>
</html>