<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #80bdc1;
            color: darkred;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: darkred;
            padding: 0 25px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <h5> Hello world !!!</h5>
        </div>

        <div class="links">
            <a href="/bla"> {{ $content}}  => "Наш Bla{{$valerchik}} "</a> <br><br>
            <a href="/name">{{$title }} => "return to the link " /name ""</a>
{{--            Т.к. сервак так и не загрузился, то http://laravel/new-blog/blog/public/blog прописываю ссылку вручную--}}
            <br><br>
            <a href="/name">return to the link " /name "</a>


        </div>
    </div>
</div>




{{--<div>--}}
{{--  если закоментировать, то выкидывает как положено по ссылке.--}}
{{--    @foreach ($users as $user)--}}

{{--        <li>  {{ $user->id}}</li>--}}
{{--    @endforeach--}}
{{--</div>--}}



{{--<div>--}}

{{--    @foreach($posts as $post)--}}
{{--        <h1> {{ $post->title  }}  </h1>--}}
{{--        <p> {{  $post->content }}  </p>--}}
{{--    @endforeach--}}

{{--</div>--}}






</body>
</html>
