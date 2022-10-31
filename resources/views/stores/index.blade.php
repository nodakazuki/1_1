<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
       
        @extends('layouts.app')
    
        @section('content')
        <script src="{{ asset('/js/style.js') }}"></script>
        <div class="flex_test-box">
            <select name="prefectures">
  　　    　　<option value="" selected>エリア</option>
 　　　        <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
            </select>
            <div class="category">
            <select name="sources" id="sources" class="custom-select sources" placeholder="Source Type">
            <option value="カテゴリー">カテゴリー</option>
            <option value="豚骨">豚骨</option>
            <option value="味噌">味噌</option>
            <option value="豚骨">しょうゆ</option>
            <option value="味噌">塩</option>
            <option value="豚骨">つけ麺</option>
            <option value="味噌">タンタンメン</option>
            <option value="豚骨">鶏白湯ラーメン</option>
            <option value="味噌">油そば</option>
            <option value="豚骨">横浜家系</option>
            <option value="味噌">二郎系</option>
            </select>
            </div>
            <INPUT TYPE="button" VALUE="検索">
        </div>
        
       
    　　<div class="stores">
    　　      @foreach ($stores as $store) 　
                <div class="store1">
                    <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; display: inline-block;">
                        <h4>店名 <a href="/stores/{{ $store->id }}">{{ $store->name }}</a></h4>
                        <h4>場所 {{ $store->place }}</h4>
                        <img src="{{ $store->photo }}" width="200" height="130">
                    </div>
                </div>
                
            </div>
            @endforeach
            <!--storesはStorecontrollerのwithの後ろのstoresからきている-->
            <!--$storesという変数名で$storeに中に入っているデータを取得できる-->
            <!--$storeを使う時はforeachの中-->
        
        @endsection
      
    </body>
</html>
