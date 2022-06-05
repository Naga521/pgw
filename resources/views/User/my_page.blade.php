@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<p>性別（男）</p>
<p>名前：{{$my_user->name}}</p>
<p>ゲーム名（apex)　</p>
<p>レベル500</p>
<p>バトロワランク（マスター）</p>
<p>アリーナランク（プラチナ）</p>
<p>楽しくカジュアル</p>
<p>よろしくお願いします</p>

@if (Session::has('top_image_pass'))
    <img src="{{ asset('/storage/top_file') }}/{{ session('top_image_pass') }}" alt=""> 

@endif
    
  </form>
  
<!-- マイページ変更画面 -->
<form action="/user/create" method="post" enctype='multipart/form-data'> 
    {{ csrf_field() }}
    @method('PUT')
    <!-- 画像内容 -->
    <div>
        <input type="file" name="top_image">
    </div>
    <input type="submit" value="保存">
    <div class='戻る'>[<a href='/user'>戻る</a>]</div>
    

@endsection