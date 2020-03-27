@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
            <!-- user-login -->
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="user-account">
                    <h2 class="text-center">Reset Password</h2>
                    <!-- form -->
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <input id="email" type="email" class="m-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="m-0 form-control @error('password') is-invalid @enderror" name="password" required placeholder="New Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password_confirmation" type="password" class="m-0 form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required placeholder="Confirm Password">

                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn">Reset Password</button>
                    </form><!-- form -->
                </div>
                <a href="{{ route('register') }}" class="btn btn-primary my-3 mx-auto">Create a New Account</a>
            </div><!-- user-login -->
        </div><!-- row -->

</div>
@endsection
