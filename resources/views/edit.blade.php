<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            {{ csrf_field() }}
            <!--formを送信する時に必要-->
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                <p class ="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れ様でした。">{{ $post->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.bpdy') }}</p>
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class='back'>[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
</html>
