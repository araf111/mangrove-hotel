<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Mangrove Login Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset( 'backend/lib/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset( 'backend/lib/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset( 'backend/lib/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset( 'backend/css/adminMangrove.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.html">
            <img src="{{ asset('backend/img/logo-g.png') }}">
            </a>
        </div>
        
        @yield('content')
    
    </div>
    <!-- /.login-box -->


    <!-- jQuery -->
    <script src="{{ asset('backend/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/js/adminMangrove.js') }}"></script>
</body>
</html>
