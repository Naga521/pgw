<!DOCTYPE html>
<h3>検索結果</h3>
 @foreach ($users as $user)
   <a href="/users/{{$user->id}}"><h4 class='home'>{{ $user->name }}</h4></a>
   @if ($user->image_path)
   <!-- 画像を表示 -->
   　<img src="{{ $user->image_path }}" width=100>
   @endif 
   <a href="/user">戻る</a>
 @endforeach
