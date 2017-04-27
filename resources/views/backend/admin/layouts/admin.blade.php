<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FreznoShop Admin Area</title>

    <!-- CSSs -->
    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet">
    
    <!-- Token Script -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div id="admin">

    @include('backend.admin.navigation.top-nav')

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                @if (isset($breadcrumb))
                    <li>Dashboard</li>
                    <li class="active">{{ $breadcrumb }}</li>
                @else
                    <li class="active">Dashboard</li>
                @endif
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <footer id="footer">
        <p>FreznoShop AdminPanel</p>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('/assets/js/app.js') }}"></script>
</body>
</html>
