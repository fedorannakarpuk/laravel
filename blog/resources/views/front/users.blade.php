<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
 
   
    <div>
        @foreach ($users as $user) 
        <li>  {{ $user}}</li>
        @endforeach 
    </div>
     
       
</body>
</html>