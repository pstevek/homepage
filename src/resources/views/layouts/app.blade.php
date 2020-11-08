<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} @yield('subtitle')</title>

        <!-- Google Web fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('icon-fonts/essential-regular-fonts/essential-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('styles')
    </head>
    <body>
        <!-- Preloading -->
        <div id="preloader">
            <div class="spinner">
                <div class="uil-ripple-css" style="transform:scale(0.29);">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Header -->
        @include('partials.header')
        <!-- Body -->
        @yield('content')
        <!-- Footer -->
        @include('partials.footer')
    </body>
    <!-- Scripts -->
    <script src="{{ asset('js/all.js') }}"></script>
    @yield('scripts')
</html>