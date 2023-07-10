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
                   <h2 class='title'>{{$post->title}}</h2>
                   <p>{{$post->body}}</p>
              @endforeach
                 </div>
                 
      </body>
 </html>