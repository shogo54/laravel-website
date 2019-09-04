<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #eff0f2;
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
            //text-align: center;
            width: 760px;
            background-color: white;
            margin: 25px;
            padding: 20px 30px;
        }

        .title {
            font-size: 84px;
        }

        .container{
            justify-content: center;
            display: flex;
        }

        .menu{
            width: 350px;
            background-color: greenyellow;
            margin: 25px 0;
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

        h2{
            font-size: 30px;
            color: white;
            background-color: #343a40;
            padding: 25px 30px;
            margin: 0 -30px 30px;
        }

        p{
            font-size: 23px;
            color: black;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class='container'>
    <div class='content'>
        @yield('content')
    </div>
    <div class='menu'>
        @include('components.menu_bar')
    </div>
</div>

<div class='footer'>
    @yield('footer')
</div>

</body>
</html>
