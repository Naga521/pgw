@extends('layouts.app')

@section('content')
<head>　
  <link href="{{ asset('css/editcss.css') }}" rel="stylesheet">
</head>
@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

   @php
   //dd(\Auth::User()->apex()->get());
  if(count(\Auth::User()->apex()->get())!=0){
   $apex=\Auth::User()->apex()->get()[0];
   }else{
   $apex="";
   }
    if(count(\Auth::User()->valorant()->get())!=0){
   $valo=\Auth::User()->valorant()->get()[0];
   }else{
   $valo="";
   }
  if(count(\Auth::User()->cod()->get())!=0){
   $cod=\Auth::User()->cod()->get()[0];
   }else{
   $cod="";
   }
    
  @endphp


<body>
 <script src="{{mix('js/edit.js')}}" defer>
 </script>
 <form action="/my_page2" id="my_page" method="POST">
    @csrf
    @method('PUT')
    
    
       <div class="bd-highlight mb-3">
         <div class="p-2 bd-highlight">
           <div class="border border-dark" style="padding:10px;">
             <h1>ゲーム編集</h1>
             <div class="p-2 bd-highlight d-flex flex-row">
               <div class="border border-dark" style="padding:10px;">
                 <h1>Apex</h1>
                 <div>
                   <label for="apexlevel">レベル</label>
                   <select name="apex[level]" id="apexlevel">
                     <option value=100>100</option>
                     <option value=200>200</option>
                     <option value=300>300</option>
                     <option value=400>400</option>
                     <option value=500>500</option>
                   </select>
                  
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
                 @if($apex!="")
                  <input type="hidden" name="apex[id]", value={{\Auth::User()->apex()->get()[0]->id}}></input>
                   <input type="hidden" name="apex[created_at]", value={{\Auth::User()->apex()->get()[0]->create}}></input>
                  @else
                   <input type="hidden" name="apex[id]", value=-1></input>
                  @endif
               </div>
               
             
             
               <div class="p-2 bd-highlight">
                 <div class="border border-dark" style="padding:10px;">
                   <h1>Valorant</h1>
                   <div>
                     <label for="level2">レベル</label>
                     <select name="valorant[level]" id="valorantlevel">
                       <option value=100>100</option>
                       <option value=200>200</option>
                       <option value=300>300</option>
                       <option value=400>400</option>
                       <option value=500>500</option>
                     </select>
                     @if($valo!="")
                     <input type="hidden" name="valorant[id]", value={{\Auth::User()->valorant()->get()[0]->id}}></input>
                     <input type="hidden" name="valorant[created_at]", value={{\Auth::User()->valorant()->get()[0]->create}}></input>
                   @else
                    <input type="hidden" name="valorant[id]", value=-1></input>
                   @endif
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
                 </div>
               </div>

               <div class="p-2 bd-highlight">
                 <div class="border border-dark" style="padding:10px;">
                   <h1>Cod</h1>
                   <div>
                     <label for="codlevel">レベル</label>
                     <select name="cod[level]" id="codlevel">
                       <option value=100>100</option>
                       <option value=200>200</option>
                       <option value=300>300</option>
                       <option value=400>400</option>
                       <option value=500>500</option>
                       <option value=600>600</option>
                       <option value=700>700</option>
                       <option value=800>800</option>
                       <option value=900>900</option>
                       <option value=1000>1000</option>
                     </select>
                     @if($cod!="")
                     <input type="hidden" name="cod[id]", value={{\Auth::User()->cod()->get()[0]->id}}></input>
                     <input type="hidden" name="cod[created_at]", value={{\Auth::User()->apex()->get()[0]->create}}></input>
                     @else
                     <input type="hidden" name="cod[id]", value=-1></input>
                     @endif
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
                   </div>
                 </div>
  
                 <div class="pull-right" style="margin-left:auto">
                   <button id="btn" type="button">変更確定</button>
                   <p id="txt"></p>
                 </div>
               </div>
             </div>
           </div>
         </div>
         </form>
         <div class="p-2 bd-highlight">
           <div class="border border-dark" style="padding:10px;">
             <h2>アイコン編集</h2>
             <!-- マイページ変更画面 -->
             <form id="icon" action="/user/create" method="post" enctype='multipart/form-data'> 
               {{ csrf_field() }}
               @method('PUT')
               <!-- 画像内容 -->
               <div>
                 <input type="file" name="top_image">
               </div>
               <div class="text-right .align-items-end">
                 <button id="keep" type="button">保存</button>
                 <p id="txt1"></p>
               </div>
             </div>
           </div>
         <div class="button02">
           <div class="back">
             <a href="/user">戻る</a>
           </div>
         </div>
    </form>
</body>
@endsection