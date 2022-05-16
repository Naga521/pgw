<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pgw</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href="/my_page2"><h1>Teruya</h1></a>
        <div class='User'>
            <div class='User'>
                {{-- \Illuminate\Support\Facades\Auth::id() --}}
                <a href="/"><h2>アカウント検索</h2></a>
                 <a href="/"><h3>フレンドユーザー一覧</h3></a>
                   <a href="/"><h3>ユーザー一覧</h3></a>
                   @foreach ($users as $user)
                     <a href="/"><h4 class='home'>{{ $user->name }}</h4></a>
                    </div>
                   @endforeach
                   <a href="/"><h3>グループチャット一覧</h3></a>
            </div>
            <div class='paginate'>
            {{ $users->links() }}
        </div>
    </body>
</html>
@endsection