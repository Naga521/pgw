@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif
 <form action="/my_page2/{{ $user->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group row">
      <h1>Apex</h1>
      <label for="chk01" class="col-md-4 col-form-label text-md-right">レベル</label>
      <div class="col-md-6">
        <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk01" name="chk01" value="chk01" checked="checked">
           <label class="form-check-label" for="chk01">0~100</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk02" name="chk02" value="chk02">
           <label class="form-check-label" for="chk02">100~200</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk03" name="chk03" value="chk03">
           <label class="form-check-label" for="chk03">200~300</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk04" name="chk04" value="chk04">
           <label class="form-check-label" for="chk04">300~400</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk05" name="chk05" value="chk05">
           <label class="form-check-label" for="chk05">400~500</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk06" name="chk06" value="chk06">
           <label class="form-check-label" for="chk06">500</label>
        </div>
      </div>
      
      <label for="chk07" class="col-md-4 col-form-label text-md-right">バトロワランク</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk07" name="chk07" value="chk07" checked="checked">
           <label class="form-check-label" for="chk07">ブロンズ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk08" name="chk08" value="chk08">
           <label class="form-check-label" for="chk08">シルバー</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk09" name="chk09" value="chk09">
           <label class="form-check-label" for="chk09">ゴールド</label>
       </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk010" name="chk010" value="chk010">
           <label class="form-check-label" for="chk010">プラチナ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk011" name="chk011" value="chk011">
           <label class="form-check-label" for="chk011">ダイヤ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk012" name="chk012" value="chk012">
           <label class="form-check-label" for="chk012">マスター</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk013" name="chk013" value="chk013">
           <label class="form-check-label" for="chk013">プレデター</label>
        </div>
      </div>
      
      
       <label for="chk014" class="col-md-4 col-form-label text-md-right">アリーナランク</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk014" name="chk014" value="chk014" checked="checked">
           <label class="form-check-label" for="chk014">ブロンズ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk015" name="chk015" value="chk015">
           <label class="form-check-label" for="chk015">シルバー</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk016" name="chk016" value="chk016">
           <label class="form-check-label" for="chk016">ゴールド</label>
       </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk017" name="chk017" value="chk017">
           <label class="form-check-label" for="chk017">プラチナ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk018" name="chk018" value="chk018">
           <label class="form-check-label" for="chk018">ダイヤ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk019" name="chk019" value="chk019">
           <label class="form-check-label" for="chk019">マスター</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk020" name="chk020" value="chk020">
           <label class="form-check-label" for="chk020">プレデター</label>
        </div>
      </div>
      
       <label for="chk021" class="col-md-4 col-form-label text-md-right">求める人</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk021" name="chk021" value="chk021" checked="checked">
           <label class="form-check-label" for="chk021">楽しくカジュアル</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk022" name="chk022" value="chk022">
           <label class="form-check-label" for="chk022">バトロワランク</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk023" name="chk023" value="chk023">
           <label class="form-check-label" for="chk023">楽しくアリーナ</label>
       </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk024" name="chk024" value="chk024">
           <label class="form-check-label" for="chk024">アリーナランク</label>
       </div>
      
      
         <h1>Val</h1>
   <label for="chk025" class="col-md-4 col-form-label text-md-right">レベル</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk025" name="chk025" value="chk025" checked="checked">
           <label class="form-check-label" for="chk025">0~100</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk026" name="chk026" value="chk026">
           <label class="form-check-label" for="chk026">100~200</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk027" name="chk027" value="chk027">
           <label class="form-check-label" for="chk027">200~300</label>
       </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk028" name="chk028" value="chk028">
           <label class="form-check-label" for="chk028">300~400</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk029" name="chk029" value="chk029">
           <label class="form-check-label" for="chk029">400~500</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk030" name="chk030" value="chk030">
           <label class="form-check-label" for="chk030">500以上</label>
        </div>
      </div>
      
        <label for="chk031" class="col-md-4 col-form-label text-md-right">ランク</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk031" name="chk031" value="chk031" checked="checked">
           <label class="form-check-label" for="chk031">アイアン</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk032" name="chk032" value="chk032">
           <label class="form-check-label" for="chk032">ブロンズ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk033" name="chk033" value="chk033">
           <label class="form-check-label" for="chk033">シルバー</label>
       </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk034" name="chk034" value="chk034">
           <label class="form-check-label" for="chk034">ゴールド</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk035" name="chk035" value="chk035">
           <label class="form-check-label" for="chk035">プラチナ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk036" name="chk036" value="chk036">
           <label class="form-check-label" for="chk036">ダイヤ</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk037" name="chk037" value="chk037">
           <label class="form-check-label" for="chk037">イモータル</label>
        </div>
         <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk038" name="chk038" value="chk038">
           <label class="form-check-label" for="chk038">レディアント</label>
        </div>
      </div>
      
      <label for="chk039" class="col-md-4 col-form-label text-md-right">求める人</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk039" name="chk039" value="chk039" checked="checked">
           <label class="form-check-label" for="chk039">楽しくプレイ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk040" name="chk040" value="chk025">
           <label class="form-check-label" for="chk040">ランク募集</label>
       </div>
     </div>
      
      <h1>Cod</h1>
   <label for="chk041" class="col-md-4 col-form-label text-md-right">レベル</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk041" name="chk041" value="chk041" checked="checked">
           <label class="form-check-label" for="chk041">0~200</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk042" name="chk042" value="chk042">
           <label class="form-check-label" for="chk042">200~400</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk043" name="chk043" value="chk043">
           <label class="form-check-label" for="chk043">400~600</label>
       </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk044" name="chk044" value="chk044">
           <label class="form-check-label" for="chk044">600~800</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk045" name="chk045" value="chk045">
           <label class="form-check-label" for="chk045">800~1000</label>
       </div>
     </div>
      
     
      <label for="chk046" class="col-md-4 col-form-label text-md-right">ランク</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk046" name="chk046" value="chk046" checked="checked">
           <label class="form-check-label" for="chk046">ルーキー</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk047" name="chk047" value="chk047">
           <label class="form-check-label" for="chk047">ベテラン</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk048" name="chk048" value="chk048">
           <label class="form-check-label" for="chk048">エリート</label>
       </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk049" name="chk049" value="chk049">
           <label class="form-check-label" for="chk049">プロ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk050" name="chk050" value="chk050">
           <label class="form-check-label" for="chk050">マスター</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk051" name="chk051" value="chk051">
           <label class="form-check-label" for="chk051">レジェンド</label>
        </div>
      </div>
      
        <label for="chk052" class="col-md-4 col-form-label text-md-right">求める人</label>
   <div class="col-md-6">
       <div class="form-check">
           <input class="form-check-input" type="checkbox" id="chk052" name="chk052" value="chk052" checked="checked">
           <label class="form-check-label" for="chk052">楽しくプレイ</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="checkbox" id="chk053" name="chk053" value="chk053">
           <label class="form-check-label" for="chk053">ランク募集</label>
       </div>
     </div>
     <input type="submit" value="保存">
</div>
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
    <div class='戻る'>[<a href='/my_page2'>戻る</a>]</div>
</form>

@endsection