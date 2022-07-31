<!DOCTYPE html>
@extends('layouts.app')
@section('content')
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="./css/mycss.css">
      <title>pgw</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <a href="/my_page2"><h1>{{\Auth::User()->name}}</h1></a>
      <div class='User'>
        <div class='User'>
          {{-- \Illuminate\Support\Facades\Auth::id() --}}
          <div>
            <form action="/search" method="GET">
              <h2 class=search><input type="text" name="keyword" value="{{ $keyword }}">
              <input type="submit" value="検索"></h2>
            </form>
          </div>
          <h3>ユーザー一覧</h3>
          <div class=flex> 
            @foreach ($users as $user)  
              <div>
                <a href="/users/{{$user->id}}"><h4 class='home'>{{ $user->name }}</h4></a>
                @if ($user->icon_path)
      　　　　　　　　<!-- 画像を表示 -->
      　　　　　　　　<img src="{{ $user->icon_path }}"  width=100 />
    　　　　　　　　　　@else
    　　　　　　　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
    　　　　　 　　　　 @endif
    　　　　　　　　　 </div>
              @endforeach
          </div>
          
          <h3>フォロー一覧</h3>
          <div class=flex> 
　　　　　  @foreach( $data->follows()->get() as $friend )
　　　　　  <div>
　　　　　    <a href="/users/{{$friend->id}}"><h4 class='home'>{{ $friend->name }}</h4></a>
　　　　　    @if ($user->icon_path)
      　　　   　　<!-- 画像を表示 -->
      　　　    　　<img src="{{$friend->icon_path }}"  width=100 />
    　　　　　  　　　　@else
    　　　　　  　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
　　　　　    @endif
    　　　　　　 </div>
            @endforeach
          </div>
          
          <h3>フォロワー一覧</h3>
          <div class=flex> 
　　　　　  @foreach( $data->FollowUsers()->get() as $friend )
　　　　　  <div>
　　　　　    <a href="/users/{{$friend->id}}"><h4 class='home'>{{ $friend->name }}</h4></a>
　　　　　    @if ($friend->icon_path)
      　　　   　　<!-- 画像を表示 -->
      　　　    　　<img src="{{$friend->icon_path }}"  width=100 />
    　　　　　  　　　　@else
    　　　　　  　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
　　　　　    @endif
    　　　　　　 </div>
            @endforeach
          </div>
          @php
            $apex_recommend=collect([])
          @endphp
          <h3>Apexおすすめユーザー</h3>
          
            @foreach($users as $user)
              @if(count($user->apex()->get())===1 && $user->id!==\Auth::User()->id && count(\Auth::User()->apex()->get())!==0)
                @if(App\Services\RecommendApexUtility::apexoffer(\Auth::User()->apex()->get()[0]->offer,$user))
                  @php
                    $apex_recommend=$apex_recommend->concat([$user])
                  @endphp
                @endif
              @endif
            @endforeach
    
            
            <div class=flex> 
              @foreach($apex_recommend as $user)
                <div>
                  <a href="/users/{{$user->id}}"><h4 class='home'>{{ $user->name }}</h4></a>
                    @if ($user->icon_path)
      　　　          　　<!-- 画像を表示 -->
      　　　         　　<img src="{{ $user->icon_path }}"  width=100 />
    　　　　　        　　　　@else
    　　　　　       　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
　　　　　         @endif
　　　　　      </div>
              @endforeach
             </div>
          
          @php
            $valorant_recommend=collect([])
          @endphp
          
          <h3>Valorantおすすめユーザー</h3>
         
            @foreach($users as $user)
              @if(count($user->valorant()->get())===1 && $user->id!==\Auth::User()->id&& count(\Auth::User()->valorant()->get())!==0)
                @if(App\Services\RecommendValorantUtility::valorantoffer(\Auth::User()->valorant()->get()[0]->offer,$user))
                  @php
                    $valorant_recommend=$valorant_recommend->concat([$user])
                  @endphp
                @endif
              @endif
            @endforeach
            
            <div class=flex>
              @foreach($valorant_recommend as $user)
              <div>
                <a href="/users/{{$user->id}}"><h4 class='home'>{{ $user->name }}</h4></a>
                  @if ($user->icon_path)
      　　　       　　<!-- 画像を表示 -->
      　　　        　　<img src="{{ $user->icon_path }}"  width=100 />
    　　　　　     　　　　@else
    　　　　　      　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
　　　　　        @endif
              </div>
              @endforeach
            </div>
          
          @php
            $cod_recommend=collect([])
          @endphp
          <h3>Codおすすめユーザー</h3>
          @foreach($users as $user)
            @if(count($user->cod()->get())===1 && $user->id!==\Auth::User()->id&& count(\Auth::User()->cod()->get())!==0)
              @if(App\Services\RecommendCodUtility::codoffer(\Auth::User()->cod()->get()[0]->offer,$user))
                @php
                   $cod_recommend=$cod_recommend->concat([$user])
                @endphp
              @endif
            @endif
          @endforeach
            
          <div class=flex>
            @foreach($cod_recommend as $user)
              <div>
                <a href="/users/{{$user->id}}"><h4 class='home'>{{ $user->name }}</h4></a>
                  @if ($user->icon_path)
      　　　       　　<!-- 画像を表示 -->
      　　　       　　<img src="{{ $user->icon_path }}"  width=100 />
    　　　　　      　　　　@else
    　　　　　      　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
　　　　　        @endif
    　　　 　　　 </div>
            @endforeach
          </div>
          
          <h3>グループチャット一覧</h3>
            <div class=flex>
              @foreach ($chats as $chat)
                <div>
                  <h2 class='部屋１'>
                    <a href="/chats/{{ $chat->id }}">{{ $chat->room_name }}</a>
                  </h2>
                  <a href="">{{ $chat->name }}</a>
                </div>
              @endforeach
            </div>
            [<a href='/chats/create_room'>チャットルーム作成</a>]
            <h3>ダイレクトメッセージ</h3>
            <div class=flex>
              @foreach ($users as $user)  
                @if($user->name!== \Auth::User()->name)
                  <div>
                   　<h2><a href="/dms/{{\Auth::User()->id}}/{{$user->id}}">{{$user->name}}とのメッセージ</a></h2>
                  </div>
                @endif
              @endforeach
            </div>
    </body>
  </html>
@endsection