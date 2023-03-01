@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <form action="{{ route('user-profile-information.update') }}" method="POST" class="needs-validation" autocomplete="off">
                @method('PUT')
                @csrf
                <div class="card-header">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name','updateProfileInformation') is-invalid @enderror" value="{{ old('name', auth()->user()->name) }}">
                        @error('name', 'updateProfileInformation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" id="email" name="email" class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror" value="{{ old('email', auth()->user()->email) }}">
                            @error('email', 'updateProfileInformation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" id="username" name="username" class="form-control @error('username', 'updateProfileInformation') is-invalid @enderror" value="{{ old('username', auth()->user()->username) }}">
                            @error('username', 'updateProfileInformation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
