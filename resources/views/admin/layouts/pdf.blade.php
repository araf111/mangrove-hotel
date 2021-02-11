<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @stack('css')
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset( 'backend/css/custom.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')
        </div>
        <!-- /.content-wrapper -->

    </div>

    <!-- ./wrapper -->
    @include('admin.layouts.foot')

    @stack('scripts')
</body>
</html>
