<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Edit Post</title>
    </head>
    <body>
      <h1>Edit Post</h1>
      <form action="/edit-post/{{$post->id}}" method="post">
        @csrf
        @method('PUT')
        <input name="title" type="text" value="{{$post->title}}"/>
        <textarea name="body">{{$post->body}}</textarea>
        <button>Save Changes</button>
      </form>
      
    </body>
    </html>