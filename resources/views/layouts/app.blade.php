<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{route('home')}}">
                    <img src="{{asset('')}}" alt="Lietuvos Žvyneline Sergančiųjų Draugija" width="112" height="28">
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Learn</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile"></a>

                    <div class="navbar-end"></div>
                </div>

            </div>
    </nav>
    @yield('content')

</div>
</body>
</html>
