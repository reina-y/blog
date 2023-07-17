<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>
    </head>
    <body>
        <h1 class='title'>
           {{$post->title}}
        </h1>
        <div class='body'>
            <p>{{$post->body}}</p>
        </div>
        <button>
            <a href='/'>投稿一覧</a>
            
            <br><a href='{{$post->id}}/edit'>編集</a>
        </button>
    </body>
</html>