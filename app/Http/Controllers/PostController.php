<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Category;
use App\Store;
// APP\Postをこのファイルで使えるようにする
// $postはPOSTモデルでAPP\POSTとつながっている
class PostController extends Controller
{
    public function index(Store $store)
    {
        $results = Post::where('store_id','=',$store->id)->get();
        
        return view('posts/index')->with(['posts'=> $results]);
        // indexに対してデータベースのデータを取得して渡す(変数postsに対してpost1,poat2とデータが入っている
        // 変数名postsでpostテーブルの全データを渡す
        // Postをインスタンス化して使う
        // postsはindexで使える変数$postsとつながっている
        // $postの中にはPost.phpでPostモデルのデータがある
        // $postのgetPaginateByLimit()をpostsに代入している
        // viewに一緒に持っていくwith
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
         // showに対してデータベースのデータを取得して渡す(変数postに対してpost1,poat2とデータが入っている
        // 変数名postでpostテーブルの全データを渡す
        // Postをインスタンス化して使う
        // postはshowで使える変数$postとつながっている
        // $postの中にはPost.phpでPostモデルのデータがある
        // $postをpostに代入している
        // viewに一緒に持っていくwith
    }
    
    public function create(Store $store)
    {
        
        return view('posts/create')->with(['store' => $store]);
    }
    // createにはcategoryだけ写す必要がある
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $input += ['user_id'=>$request->user()->id];
        $post->fill($input)->save();
        return redirect('/stores/' .$input['store_id']);
    }
    // formのデータを送らせて$requestで受け取る
    // $requestを$inputに入れて保存
    // $requestのpostはinputの中のnameと一致している
    // fillはPostのfillableとつながっている
    // PostRequestはデータを送信するため必要である
    public function edit(Post $post)
    {
        // Postは設計書で$postは設計書道理作られたロボット
        return view('posts/edit')->with(['post' => $post]);
          // editに対してデータベースのデータを取得して渡す(変数postに対してpost1,poat2とデータが入っている
        // 変数名postでpostテーブルの全データを渡す
        // Postをインスタンス化して使う
        // postはeditで使える変数$postとつながっている
        // $postの中にはPost.phpでPostモデルのデータがある
        // $postをpostに代入している
        // viewに一緒に持っていくwith
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $input_post += ['user_id'=>$request->user()->id];
        $post->fill($input_post)->save();
        return redirect('/posts/' ,$post->id);
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    
}
