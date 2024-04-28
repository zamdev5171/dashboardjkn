@extends('layouts.app')
@section('content')
<div class="authentication h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authentication-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Forgot Password</h4>
                                <p class="auth-subtitle mb-3">Please enter a valid email as registered and the reset password link will be send to the email provided.</p>
                                @if (session('message'))
                                    <div class="text-success text-center" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form method="POST" action="/forget-password">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">SEND</button>
                                    </div>
                                    <div class="text-center mt-3 text-lg fs-4">
                                        <p class='text-gray-600'>Remember your account? <a href="{{ route('login') }}" class="font-bold">Login</a>.</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection