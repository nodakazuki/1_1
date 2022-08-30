<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
// APP/Postをこのファイルで使えるようにする
// $postはPOSTモデルでAPP/POSTとつながっている
class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);
        // indexに対してデータベースのデータを取得して渡す(変数postsに対してpost1,poat2とデータが入っている
        // 変数名postsでpostテーブルの全データを渡す
        // Postをインスタンス化して使う
        // postsはindexで使える変数$postsとつながっている
        // $postの中にはPost.phpでPostモデルのデータがある
        // $postをpostsに代入している
        // viewに一緒に持っていくwith
        // どのモデルを使うか
    }

    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
        // showに対してデータベースのデータを取得して渡す(変数postに対してpost1,poat2とデータが入っている
        // 変数名postでpostテーブルの全データを渡す
        // Postをインスタンス化して使う
        // postはshowで使える変数$postとつながっている
        // $postの中にはPost.phpでPostモデルのデータがある
        // $postをpostに代入している
        // viewに一緒に持っていくwith
        // どのモデルを使うか
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/post/' .$post->id);
    }
        // formのデータを送らせて$requestで受け取る
    // 　　$requestを$inputに入れて保存
      
    public function edit(Post $post)
    {
        return view('edit')->with(['post' => $post]);
    }
    
    public function update(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/', $post->id);
    }
}