<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset='utf-8'>
        <title>blog</title>
    </head>
       <body>
           <h1>投稿</h1>
           <form action='/posts' method='POST'>
               @csrf
               <div class='title'>
                  <input type='text' name='post[title]' size=80  placeholder='テキスト' value="{{ old('post.title') }}"/>
                  <p class=title_error>{{$errors->first('post.title')}}</p>
               </div>
               <div class='body'>
                   <textarea name='post[body]' cols=82 rows=20 placeholder='本文'>{{ old('post.body') }}</textarea>
                  <p class='body_error'>{{$errors->first('post.body')}}</p>
               </div>
               <input type='submit' value='保存'/>
            </form>
            <a href='/'>戻る</a>
       </body>
</html>