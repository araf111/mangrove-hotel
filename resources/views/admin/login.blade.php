@extends('admin.layouts.guest')
@section('content')
    <!-- /.login-logo -->   
    <div class="card">
        <div class="card-body login-card-body">
        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
        @endif
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="User Eamil" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                <span><img src="{{ asset('backend/img/user.png') }}"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span><img src="{{ asset('backend/img/pass.png') }}"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <div class="col-12">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
                </div>
            </div>
            <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
        </p>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection