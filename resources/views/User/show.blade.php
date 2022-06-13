@extends('layouts.app')

@section('content')

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif
@if ($user->icon_path)
      　　　　　　　　　　　　　<!-- 画像を表示 -->
      　　　　　　　　　　　　　　<img src="{{ $user->icon_path }}"  width=100 />
    　　　　　　　　　　　　　　@else
    　　　　　　　　　　　　　　<img src="https://s3.ap-northeast-1.amazonaws.com/mypage-backet/39ZhpejTmweG3g8hyMr3ymzGRwe8DUuiMFkpnUVa.png" width=100 />
    　　　　　　　　　　 @endif
<p>名前：{{$user->name}}</p>
<p>apex</p>
<p>レベル:{{$user->apex()->get()[0]->level}}</p>
<p>バトロワランク:{{$user->apex()->get()[0]->battle_royale_rank}}</p>
<p>アリーナランク:{{$user->apex()->get()[0]->arena_rank}}</p>
<p>offer:{{$user->apex()->get()[0]->offer}}</p>

<p>valorant</p>
<p>レベル:{{$user->valorant()->get()[0]->level}}</p>
<p>ランク:{{$user->valorant()->get()[0]->rank}}</p>
<p>offer:{{$user->valorant()->get()[0]->offer}}</p>

<p>cod</p>
<p>レベル:{{$user->cod()->get()[0]->level}}</p>
<p>ランク:{{$user->cod()->get()[0]->rank}}</p>
<p>offer:{{$user->cod()->get()[0]->offer}}</p>
 <a href="/user">戻る</a>


@endsection