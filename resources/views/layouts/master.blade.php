<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FreznoShop') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">

    <!-- Token Script -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div id="app">
    @include('navigation.top-nav')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('/assets/js/app.js') }}"></script>
</body>
</html>
