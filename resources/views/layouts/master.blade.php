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

    <header>
        <div class="flex flex-wrap h-20 md:h-10 border-2 items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center no-underline sm:font-semibold ml-4 sm:text-xl sm:tracking-wide">
                {{ config('app.name', 'FreznoShop') }}
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
