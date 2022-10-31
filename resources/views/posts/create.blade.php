<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
   
    <body>
        @extends('layouts.app')
    
        @section('content')
        
        <h1>口コミ投稿</h1>
        <form action="/stores/{{$store->id}}/posts" method="POST">
            @csrf
            <!--formを送信する時に必要-->
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="豚骨最高" value="{{ old('post.title') }}"/>
                <p class ="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="麺もスープもおいしかったです。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="hidden" value="{{$store->id}}" name="post[store_id]">
           
            <input type="submit" value="投稿"/>
        </form>
        <div class='back'>[<a href='/'>戻る</a>]</div>

        @endsection
        
    </body>
</html>
