@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="../assets/img/stisla-fill.svg" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Reset Password</h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">We will send a link to reset your password</p>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ request()->token }}">
                                <input type="hidden" name="email" value="{{ request()->email }}">
                                <div class="form-group">
                                    <label for="password" class="d-block">New Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="d-block">Password Confirmation</label>
                                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright {{ date('Y') }} &copy; {{ env('APP_NAME') }} &bull; Theme by Stisla
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
