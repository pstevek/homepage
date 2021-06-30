<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Mintech  IT Solutions &  Services Template">
        <title>{{ config('portfolio.mintech.title') }} @yield('subtitle')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
        <link rel="stylesheet" href="{{ asset('portfolio/mintech/css/libraries.css') }}">
        <link rel="stylesheet" href="{{ asset('portfolio/mintech/css/style.css') }}">
    </head>
    <body>
        <div class="wrapper">
            {{-- Preloader --}}
            <div class="preloader">
                <div class="loading">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>
            
        </div>
    </body>
</html>