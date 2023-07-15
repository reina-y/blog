<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset='utf-8'>
        <title>blog</title>
    </head>
       <body>
           <form action='/posts' method='POST'>
               @csrf
               <div class='title'>
                  <p>タイトル
                  <br><input type='text' name='post[title]' size=80 value="{{ old('post.title') }}"/></p>
                  <p class=title_error>{{$errors->first('post.title')}}</p>
               </div>
               <div class='body'>
                  <p>本文 
                  <br><textarea name='post[body]' cols=82 rows=20>{{ old('post.body') }}</textarea></p>
                  <p class='body_error'>{{$errors->first('post.body')}}</p>
               </div>
               <input type='submit' value='保存'/>
            </form>
            <a href='/'>戻る</a>
       </body>
</html>