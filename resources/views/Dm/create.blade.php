<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>チャット</h1>
        <form action="/dms" method="POST">
            @csrf
            <div class="body">
                <textarea name="dm[message]" placeholder="コメントする">{{ old('dm.message') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('dm.message') }}</p>
            </div>
            <input value="{{$id}}" name="dm[to_id]" style="display:none"/>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>