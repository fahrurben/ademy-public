<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ademy') }}</title>

    <script>
        var base_url = '<?php echo URL::to('/') ?>';
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('inlineCss')
</head>
<body>

<!-- app -->
<div class="root-wrapper">
    <div class="main-nav-column">
        <ul class="main-nav nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="fas fa-home fa-lg"></i>
                    <span>@lang('Home')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user fa-lg"></i>
                    <span>@lang('Mahasiswa')</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-wrapper">
        @yield('content')
    </div>
</div>
<!-- End of app -->


</body>
</html>
