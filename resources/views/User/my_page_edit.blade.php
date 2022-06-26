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
                    {{App\Services\ApexUtility::apexlevel($apex->level)}}
                   </select>
                  
                   </div>
      
                 <div>
                   <label for="apexrank">バトロワランク</label>
                   <select name='apex[battle_royale_rank]' id="apexrank">
                     {{App\Services\ApexUtility::apexbattle_royale_rank($apex->battle_royale_rank)}}
                     </select>
                 </div>
      
                 <div>
                   <label for="apexrank">アリーナランク</label>
                   <select name='apex[arena_rank]'id="apexrank">
                     {{App\Services\ApexUtility::apexarena_rank($apex->arena_rank)}}
                   </select>
                 </div>
                 <div>
                  <label for="apexoffer">求める人</label>
                   <select name="apex[offer]" id="apexoffer">
                   {{App\Services\ApexUtility::apexoffer($apex->offer)}}
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
                       {{App\Services\ValorantUtility::valorantlevel($valo->level)}}
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
                         {{App\Services\ValorantUtility::valorantrank($valo->rank)}}
                       </select>
                   </div>
                   <div>
                     <label for="valorantoffer">求める人</label>
                     <select name="valorant[offer]" id="valorantoffer">
                      {{App\Services\ValorantUtility::valorantoffer($valo->offer)}}
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
                       {{App\Services\CodUtility::codlevel($cod->level)}}
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
                        {{App\Services\CodUtility::codrank($cod->rank)}}
                       </select>
                     </div>
                     <div>
                       <label for="codoffer">求める人</label>
                       <select name="cod[offer]" id="codoffer">
                        {{App\Services\CodUtility::codoffer($cod->offer)}}
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