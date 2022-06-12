@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

 <form action="/my_page2" method="POST">
    @csrf
    @method('PUT')
     <div>
      <h1>Apex</h1>
      <div>
        <label for="apexlevel">レベル</label>
        <select name="apex[level]" id="apexlevel">
         <option value=10>10</option>
         <option value=20>20</option>
         <option value=30>30</option>
         <option value=40>40</option>
        </select>
         <input type="hidden" name="apex[id]", value={{\Auth::User()->apex()->get()[0]->id}}></input>
          <input type="hidden" name="apex[created_at]", value={{\Auth::User()->apex()->get()[0]->create}}></input>
      </div>
      
      <div>
      <label for="apexrank">バトロワランク</label>
        <select name='apex[battle_royale_rank]' id="apexrank">
         <option value="ブロンズ">ブロンズ</option>
         <option value="シルバー">シルバー</option>
         <option value="ゴールド">ゴールド</option>
         <option value="プラチナ">プラチナ</option>
         <option value="ダイヤ">ダイヤ</option>
         <option value="マスター">マスター</option>
         <option value="プレデター">プレデター</option>
        </select>
      </div>
      
      <div>
        <label for="apexrank">アリーナランク</label>
        <select name='apex[arena_rank]'id="apexrank">
         <option value="ブロンズ">ブロンズ</option>
         <option value="シルバー">シルバー</option>
         <option value="ゴールド">ゴールド</option>
         <option value="プラチナ">プラチナ</option>
         <option value="ダイヤ">ダイヤ</option>
         <option value="マスター">マスター</option>
         <option value="プレデター">プレデター</option>
        </select>
      </div>
      <div>
       <label for="apexoffer">求める人</label>
        <select name="apex[offer]" id="apexoffer">
         <option value="楽しくカジュアル">楽しくカジュアル</option>
         <option value="バトロワランク">バトロワランク</option>
         <option value="楽しくアリーナ">楽しくアリーナ</option>
         <option value="アリーナランク">アリーナランク</option>
        </select>
      </div>
    </div>
    <div>
    <h1>Valorant</h1>
      <div>
        <label for="level2">レベル</label>
        <select name="valorant[level]" id="valorantlevel">
         <option value=10>10</option>
         <option value=20>20</option>
         <option value=30>30</option>
         <option value=40>40</option>
        </select>
         <input type="hidden" name="valorant[id]", value={{\Auth::User()->valorant()->get()[0]->id}}></input>
          <input type="hidden" name="valorant[created_at]", value={{\Auth::User()->apex()->get()[0]->create}}></input>
      </div>
      <div>
      <label for="valorantrank">ランク</label>
        <select name='valorant[rank]' id="valorantrank">
         <option value="アイアン">アイアン</option>
         <option value="ブロンズ">ブロンズ</option>
         <option value="シルバー">シルバー</option>
         <option value="ゴールド">ゴールド</option>
         <option value="プラチナ">プラチナ</option>
         <option value="ダイヤ">ダイヤ</option>
         <option value="イモータル">イモータル</option>
         <option value="レディアント">レディアント</option>
        </select>
      </div>
     <div>
       <label for="valorantoffer">求める人</label>
        <select name="valorant[offer]" id="valorantoffer">
         <option value="楽しくプレイ">楽しくプレイ</option>
         <option value="ランク">ランク募集</option>
        </select>
      </div>
      
      <div>
        <h1>Cod</h1>
      <div>
        <label for="codlevel">レベル</label>
        <select name="cod[level]" id="codlevel">
         <option value=10>10</option>
         <option value=20>20</option>
         <option value=30>30</option>
         <option value=40>40</option>
        </select>
         <input type="hidden" name="cod[id]", value={{\Auth::User()->cod()->get()[0]->id}}></input>
          <input type="hidden" name="cod[created_at]", value={{\Auth::User()->apex()->get()[0]->create}}></input>
      </div>
      <div>
      <label for="codrank">ランク</label>
        <select name='cod[rank]' id="codrank">
         <option value="ルーキー">ルーキー</option>
         <option value="ベテラン">ベテラン</option>
         <option value="エリート">エリート</option>
         <option value="プロ">プロ</option>
         <option value="マスター">マスター</option>
         <option value="レジェンド">レジェンド</option>
        </select>
      </div>
     <div>
       <label for="codoffer">求める人</label>
        <select name="cod[offer]" id="codoffer">
         <option value="楽しくプレイ">楽しくプレイ</option>
         <option value="ランク">ランク募集</option>
        </select>
      </div>
     <input type="submit" value="保存" />
</div>
</form>

<hr>
画像
<!-- マイページ変更画面 -->
<form action="/user/create" method="post" enctype='multipart/form-data'> 
    {{ csrf_field() }}
    @method('PUT')
    <!-- 画像内容 -->
    <div>
        <input type="file" name="top_image">
    </div>
    <input type="submit" value="保存" />
    <div class='戻る'>[<a href='/my_page2'>戻る</a>]</div>
</form>

@endsection