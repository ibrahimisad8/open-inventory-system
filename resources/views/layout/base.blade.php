<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | @yield('sub-title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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

            .small-title
            {
                font-size: 25px;
                text-transform : uppercase; 
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            input,textarea,button
            {
                width : 100%;
                padding : 9px;
                border : 1px solid #DDD;
                border-radius : 5px; 
            }

            button
            {
                width : 50%; 
                background : #CCC;
                font-size  : 15px;
            }

            .sub-content
            {
                width:25%;
                margin:0px auto;
                text-align:justify
            }

            .items
            {
                border  : 1px dashed #BBB;
                padding : 9px;
                font-size : 12px;
                text-transform:uppercase;  
                border-radius : 7px;
                margin-bottom : 5px; 
                text-align : left; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if(Route::has('login'))
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

            @yield('content')
        </div>
    </body>
</html>
