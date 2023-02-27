@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="login-brand">
                        <img src="../assets/img/stisla-fill.svg" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 alert alert-success">
                            A new email verification link has been emailed to you!
                        </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Your email isn't verified</h4>
                        </div>
                        <div class="card-body">
                            <p>please check your email and go to the link for email verification.</p>
                            <div class="form-group">
                                <form action="{{ route('verification.send') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Resend Verification Email
                                    </button>
                                </form>
                            </div>
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
