<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mangrove') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('front/css/front.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body class="invest-body">
    <header class="invest-header d-flex justify-content-between">
        <a href="/"><img src="images/logo-w.png" alt=""></a>
        <div class="d-flex align-items-start">
            <a class="policy-btn mr-2" href="/registration">Register</a>
        </div>
    </header>

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('front/js/investor.js') }}"></script>
 
</body>
</html>
