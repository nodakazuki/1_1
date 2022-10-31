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
       
        <h1>Blog Name</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post) 
            <!--postsはpostcontrollerのwithの後ろのpostsからきている-->
            <!--$postsという変数名で$postに中に入っているデータを取得できる-->
                <div class='post'>
                    <a href='/posts/{{ $post->id }}'<h2 class='title'>{{$post->title}}</h2></a>
                    <p class='body'>{{$post->body}}</p>
                </div>
            @endforeach
            <!--$postを使う時はforeachの中-->
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <a href="">{{ $post->category->name }}</a>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        @endsection
       
    </body>
    
    
</html>