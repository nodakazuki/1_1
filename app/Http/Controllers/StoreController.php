<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Category;
use App\Store;
// APP\Postをこのファイルで使えるようにする
// $postはPOSTモデルでAPP\POSTとつながっている
class StoreController extends Controller
{
    public function index(Store $store)
    {
       
        return view('stores/index')->with(['stores'=> $store->get()]);
        // indexに対してデータベースのデータを取得して渡す(変数postsに対してpost1,poat2とデータが入っている
        // 変数名postsでpostテーブルの全データを渡す
        // Postをインスタンス化して使う
        // postsはindexで使える変数$postsとつながっている
        // $postの中にはPost.phpでPostモデルのデータがある
        // $postのgetPaginateByLimit()をpostsに代入している
        // viewに一緒に持っていくwith
    }
    
    public function show(Store $store)
    {
       
        return view('stores/show')->with(['store'=> $store]);
        // indexに対してデータベースのデータを取得して渡す(変数postsに対してpost1,poat2とデータが入っている
        // 変数名postsでpostテーブルの全データを渡す
        // Postをインスタンス化して使う
        // postsはindexで使える変数$postsとつながっている
        // $postの中にはPost.phpでPostモデルのデータがある
        // $postのgetPaginateByLimit()をpostsに代入している
        // viewに一緒に持っていくwith
    }

    
    
}
