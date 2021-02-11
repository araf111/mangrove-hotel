<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('admin.layouts.head')

    @stack('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            @section('navbar')
            @show

            @include('admin.layouts.header')
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="brand-item">
                <a href="index.html">
                    <img src="{{ asset( 'backend/img/admin-logo.png') }}" alt="Mangrove Logo" class="brand-image"
                    style="opacity: .8">
                </a>
            </div>
            @include('admin.layouts.sidebar')
        </aside>
        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @include('admin.layouts.flash-message')
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layouts.footer')
    </div>
    <div class="overlay" style="display: none;">
        <div class="progress" style="display: none;">
            <div class="progress-bar" role="progressbar" aria-valuenow=""
                 aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                0%
            </div>
            <div id="success">
            </div>
        </div>
    </div>
    <!-- ./wrapper -->
    @include('admin.layouts.foot')

    @stack('scripts')
</body>
</html>
