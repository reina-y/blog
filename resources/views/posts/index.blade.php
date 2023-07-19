<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
    </head>
      <body>
          <h1>blog</h1>
          <div class='posts'>
              @foreach($posts as $post)  
                <div class='post'>
                    <a href='/posts/{{$post->id}}/edit'>編集</a>
                   <h2 class='title'>
                       <a href='/posts/{{$post->id}}'>{{$post->title}}</a>
                   </h2>
                   <p>{{$post->body}}</p>
                   <p>{{$post->created_at}}</p>
              @endforeach
                 </div>
                 <div class='paginate'>
                     {{$posts->links()}}
                 </div>
                 <a href='/posts/create'>作成</a>
      </body>
 </html>