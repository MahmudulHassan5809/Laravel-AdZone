@extends('layouts.auth')

@section('content')
<div class="container">
     <div class="row">
            <!-- user-login -->
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="user-account">
                    <h2 class="text-center">Reset Password</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="m-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn">Send Password Reset Link</button>
                    </form><!-- form -->


                </div>

            </div><!-- user-login -->
        </div><!-- row -->


</div>
@endsection
