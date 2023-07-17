<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset='utf-8'>
        <title>blog</title>
    </head>
    <body>
        <h1>編集</h1>
        <form action='/posts/{{$post->id}}' method='POST'>
            @csrf
            @method('PUT')
            <div class='title'>
                <input type='text' name='post[title]' placeholder='タイトル' value="{{old('post.title', $post->title)}}">
                <P class='title_error'>{{$errors->first('post.title')}}</P>
            </div>　
            <div class='body'>
                <textarea name='post[body]' placeholder='本文'>{{old('post.body', $post->body)}}</textarea>
                <p class'body_error'>{{$errors->first('post.body')}}</p>
            </div>
            <input type='submit' value='保存'/>
        <a href='/'>戻る</a>
    </body>