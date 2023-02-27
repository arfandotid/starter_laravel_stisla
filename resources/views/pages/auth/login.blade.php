@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-12 min-vh-100 bg-white">
            <div class="p-4 m-3">
                <img src="../assets/img/stisla-fill.svg" alt="logo" width="80"
                    class="shadow-light rounded-circle mb-5 mt-2">
                <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">{{ env('APP_NAME') }}</span></h4>
                <p class="text-muted">Before you get started, you must login or register if you don't already have an
                    account.</p>
                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            tabindex="1"
                            autofocus
                        >
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input
                            id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            tabindex="2"
                        >
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group text-right">
                        <a href="auth-forgot-password.html" class="float-left mt-3">
                            Forgot Password?
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                            Login
                        </button>
                    </div>

                    <div class="mt-5 text-center">
                        Don't have an account? <a href="/register">Create new one</a>
                    </div>
                </form>

                <div class="text-center mt-5 text-small">
                    Copyright {{ date('Y') }} &copy; {{ env('APP_NAME') }}. Made with 💙 by Stisla
                </div>
            </div>
        </div>
        <div class="col-lg-8 d-none d-lg-inline col-12 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
            data-background="../assets/img/unsplash/login-bg.jpg">
            <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                    <div class="mb-5 pb-3">
                        <h1 class="mb-2 display-4 font-weight-bold">{{ env('APP_NAME') }}</h1>
                        <h5 class="font-weight-normal text-muted-transparent">v1.0</h5>
                    </div>
                    Photo by <a class="text-light bb" target="_blank"
                        href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb"
                        target="_blank" href="https://unsplash.com">Unsplash</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
