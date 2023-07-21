<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
    </head>
      <body>
          <h1>blog</h1>
          </form>
          <div class='posts'>
              @foreach($posts as $post)
                <div class='post'>
                    <a href='/posts/{{$post->id}}/edit'>編集</a>
                   <h2 class='title'>
                       <a href='/posts/{{$post->id}}'>{{$post->title}}</a>
                   </h2>
                   <p>{{$post->body}}</p>
                   <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{$post->id}})">削除</button>
                    </form>
                   <p>{{$post->created_at}}</p>
              @endforeach
                 </div>
                 <div class='paginate'>
                     {{$posts->links()}}
                 </div>
                 <a href='/posts/create'>作成</a>
                 <script>
                     function deletePost(id){
                         'use strict'
                        
                        if(confirm('本当に削除しますか？')){
                            document.getElementById(`form_${id}`).submit();
                        } 
                     }
                 </script>
      </body>
 </html>