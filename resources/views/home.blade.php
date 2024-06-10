<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Home</title>
    </head>
    <body>
      @auth
       <p>Logged in</p>
       <form action="/logout" method="POST">
         @csrf
         <button>Logout</button>
       </form>
      <div style="border:3px solid black;">
        <h2>Create A New Post</h2>
        <form action="/create-post" method="post">
          @csrf
          <input type="text" name="title"/>
          <textarea name="body" placeholder="Body Content..."></textarea>
          <button>Create New Post</button>
          
        </form>
        
        
      </div>
      <div style="border:3px solid black;">
        <h2>All Posts</h2>
        @foreach ($posts as $post)
          <div style="
          background-color:#8d96e4;
          padding:10px;
          margin:10px;
          ">
            <h3>{{$post['title']}} by {{$post->user->name}}</h3>
            {{$post['body']}}
            <p><a href="/edit-post/{{$post->id}}">Edit Post</a></p>
            <form action="delete-post/{{$post->id}}" method="post">
              @csrf
              @method('DELETE')
              <button>Delete</button>
              
            </form>
          </div>
        
        @endforeach
        </div>
      @else
        <div style="border:3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
          @csrf
          <input type="text" placeholder="name" name="name">
          <input type="text" placeholder="email" name="email">
          <input type="password" placeholder="password" name="password">
          <button>Register</button>
          
        </form>
        
      </div>
    <div style="border:3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
          @csrf
          <input type="text" placeholder="name" name="loginname">
          <input type="password" placeholder="password" name="loginpassword">
          <button>Login</button>
          
        </form>
        
      </div>
      
      @endauth
      
      

      
    </body>
</html>