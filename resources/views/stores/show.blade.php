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
        <div class="stores">
            <h2>店詳細情報</h2>
            <img src="{{ $store->photo }}" width="200" height="130">
            <table>
                <tbody>
                    <tr>
                        <th>営業時間</th>
                        <td>{{ $store->business_hours }}</td>
                    </tr>
                    <tr>
                        <th>定休日</th>
                        <td>{{ $store->off_date }}</td>
                    </tr>
                    <tr>
                        <th>料金</th>
                        <td>{{ $store->price }}</td>
                    </tr>
                    <tr>
                        <th>駐車場</th>
                        <td>{{ $store->parking }}</td>
                    </tr>
                </tbody>
            </table>
            <h4><a href="/stores/{{ $store->id }}/posts/create">口コミを投稿する</a></h4>
            <h4><a href="/stores/{{ $store->id }}/posts">口コミを表示する</a></h4>
      
        @endsection
    </body>
   
   
    
</html>
