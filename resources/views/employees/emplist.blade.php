<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">

    <script language="JavaScript" type="text/javascript" src="js/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/bootstrap.js"></script>
    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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

        .title:hover {
            color:darkorange;
        }

        .title-class-2 {
            font-size: 64px;
        }

        .title-class-2:hover {
            color: #259d6d;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a:hover {
            color: red;
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
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <span class="glyphicon glyphicon-user"></span>
            Program
        </div>
        <div class="title-class-2 m-b-md">
            {{ $employees[0]['table'] }} - {{ $area }}
        </div>
        {{--@foreach($employees as $emp)--}}
            {{--<div class="title-class-2 m-b-md">--}}
                {{--{{ $emp->first_name }}--}}
            {{--</div>--}}
        {{--@endforeach--}}
        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="user/index">Lyon</a>
        </div>
    </div>
</div>
</body>
</html>
