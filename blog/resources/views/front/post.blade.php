<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>

   
    <div>
        
        @foreach($posts as $post)
            <h1> {{ $post->title  }}  </h1>
            <p> {{  $post->content }}  </p>
            @endforeach

    </div>
     
       
</body>
</html>