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

    @if(Auth::check())
    <div class="main-nav-column">
        <ul class="main-nav nav flex-column">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link active" href="#">
                    <i class="fas fa-home fa-lg"></i>
                    <span>@lang('Home')</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button">
                    <i class="fas fa-university fa-lg"></i>
                    <span>@lang('Universitas')</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('fakultas') }}">@lang('Fakultas')</a></li>
                    <li><a href="{{ route('prodi') }}">@lang('Program Studi')</a></li>
                    <li><a href="{{ route('tahunajaran') }}">@lang('Tahun Ajaran')</a></li>
                    <li><a href="{{ route('matakuliah') }}">@lang('Mata Kuliah')</a></li>
                    <li><a href="{{ route('dosen') }}">@lang('Dosen')</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('mahasiswa') }}" class="nav-link active" href="#">
                    <i class="fas fa-user-graduate"></i>
                    <span>@lang('Mahasiswa')</span>
                </a>
            </li>
        </ul>
    </div>
    @endif

    <div class="main-wrapper">
        <div class="page-header clearfix">
            <h3 class="page-title pull-left">@yield('title')</h3>
            @if(Auth::check())
                <a href="{{ route('logout') }}" class="logout btn btn-danger pull-right"><i class="fas fa-sign-out-alt"></i> Logout</a>
            @endif
        </div>
        <div class="container-fluid page-wrapper">
            @yield('content')

            <!-- Position it -->
            <div style="position: absolute; top: 0; right: 0;">
                <!-- Then put toasts within -->
                <div id="toastSuccess" class="toast" data-delay="3000" style="width: 300px" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="mr-auto">Notifikasi</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of app -->

<!-- Modal -->
<div class="modal fade modal-form" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create</h4>
            </div>
            <div id="modalCreateBody" class="modal-body">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-form" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update</h4>
            </div>
            <div id="modalUpdateBody" class="modal-body">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-form" id="modalView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">View</h4>
            </div>
            <div id="modalViewBody" class="modal-body">
            </div>
        </div>
    </div>
</div>

</body>
</html>
