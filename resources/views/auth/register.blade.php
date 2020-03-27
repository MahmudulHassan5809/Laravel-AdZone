@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
            <!-- user-login -->
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="user-account">
                    <h2 class="text-center">Register</h2>
                    <!-- form -->
                    <form method="POST" action="{{ route('register') }}" novalidate>
                         @csrf
                         <div class="form-group">
                             <input id="name" type="text" class="m-0 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                        <div class="form-group">
                            <input id="email" type="email" class="m-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         <div class="form-group">
                             <input id="phone_number" type="text" class="m-0 form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required autocomplete="phone_number" autofocus>

                                @error('phone_number')
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
                        <button type="submit" class="btn">Register</button>
                    </form><!-- form -->


                </div>
                <a href="{{ route('login') }}" class="btn btn-primary my-3 mx-auto">Already Have A Account</a>
            </div><!-- user-login -->
        </div><!-- row -->


</div>
@endsection
