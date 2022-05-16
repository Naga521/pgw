@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<p>性別（男）</p>
<p>Teruya0521</p>
<p>ゲーム名（apex)　</p>
<p>レベル500</p>
<p>バトロワランク（マスター）</p>
<p>アリーナランク（プラチナ）</p>
<p>楽しくカジュアル</p>
<p>よろしくお願いします</p>

@if (Session::has('top_image_pass'))
    <img src="{{ asset('/storage/top_file') }}/{{ session('top_image_pass') }}" alt=""> 

@endif

<!DOCTYPE html>
<html lang="ja">
<body>
<!-- マイページ変更画面 -->
<form action="/my_page2" method="post" enctype='multipart/form-data'> 
    {{ csrf_field() }}
    <!-- 画像内容 -->
    <div>
        <input type="file" name="top_image">
    </div>
    <input type="submit" value="編集">
    <div class='戻る'>[<a href='/'>戻る</a>]</div>
</form>

</body>
</html>