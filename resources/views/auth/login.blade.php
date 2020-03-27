@extends('layouts.auth')

@section('content')
<div class="container">



        <div class="row">
            <!-- user-login -->
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="user-account">
                    <h2 class="text-center">Login</h2>
                    <!-- form -->
                    <form method="POST" action="{{ route('login') }}" novalidate>
                         @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="m-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="m-0 form-control @error('password') is-invalid @enderror" name="password" required placeholder="Current Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn">Login</button>
                    </form><!-- form -->

                    <!-- forgot-password -->
                    <div class="user-option">
                        <div class="checkbox pull-left">
                            <label for="logged"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Keep me logged in </label>
                        </div>
                        <div class="pull-right forgot-password">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div><!-- forgot-password -->
                </div>
                <a href="{{ route('register') }}" class="btn btn-primary my-3 mx-auto">Create a New Account</a>
            </div><!-- user-login -->
        </div><!-- row -->


    </div>
</div>
@endsection
