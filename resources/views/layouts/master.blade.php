<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FreznoShop') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-blue-lightest font-sans min-h-screen">

    @include('layouts.header')

    <div id="app">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
</html>
