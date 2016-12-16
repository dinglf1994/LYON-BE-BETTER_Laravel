<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <style>
            html, body {
                background-color: #fff !important;
                color: #636b6f;
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        </style>
        <title>Application - @yield('title')</title>

        {{--css--}}
        <link type="text/css" href="css/bootstrap/bootstrap.css" rel="stylesheet">
        <link type="text/css" href="css/app.css" rel="stylesheet">
        <link type="text/css" href="css/lyon.css" rel="stylesheet">
        {{--js--}}
        <script language="JavaScript" type="text/javascript" src="js/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        @section('sidebar')
            <div class="row sidebar">
            <div class="col-md-12">

            </div>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>

        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>