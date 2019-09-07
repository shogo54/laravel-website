<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Flat UI
    <link href="css/flat-ui.css" rel="stylesheet">-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
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
