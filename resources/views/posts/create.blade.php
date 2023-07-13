<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BLOG</title>
    </head>
       <body>
           <form action="/posts" method="POST">
               @csrf
               <div class="title">
                  <p>タイトル
                  <br><input type='text' name='post[title]' size=80></p>
               </div>
               <div class="body">
                  <p>本文 
                  <br><textarea name='body' cols=82 rows=40></textarea></p>
               </div>
           </form>       
                  <button>保存</button>
                     <a href='/'>戻る</a>
            </form>
       </body>
</html>