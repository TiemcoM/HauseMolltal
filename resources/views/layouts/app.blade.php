<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Hause Molltal</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, #app {
            margin: 0;
            padding: 0;
        }
        .App{
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header{
            position: sticky;
            top: 0;
        }
        main{
            flex: 1;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="App">
        <header style="position:relative;">
            @include('layouts.NavBar.header')
        </header>
        <div class="container">
            <main style="min-height: calc(100vh - 104px)">{{--71px header + 33px footer = 104px--}}
                @yield('content')
            </main>
        </div>
        <footer style="background-color: #f8fafc; box-shadow: 0 -1px 10px 0 rgba(0, 0, 0, 0.19); position: relative">
            @include('layouts.footer')
        </footer>
    </div>
</div>
</body>
</html>
