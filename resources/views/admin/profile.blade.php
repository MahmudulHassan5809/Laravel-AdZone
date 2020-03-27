@extends('layouts.admin_app')

@section('content')
<div class="row mt-3">
    <div class="col-md-8 mx-auto">
        <form action="{{ route('admin.admin.update.profile') }}" method="POST">
            @csrf
            {{method_field('PUT')}}
            <h2 class="text-dark text-center">Update Profile</h2>
            <div class="form-group row">
                <div class="col-12">
                    <label>Username</label>
                    <input name="name" type="text" class="form-control" value="{{$user->name}}">
                </div>
                <div class="col-12">
                    @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <label>Email ID</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                 <div class="col-12">
                     @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <label for="name-three">Mobile</label>
                <input type="text" class="form-control" value="{{$user->phone_number}}" name="phone_number">
                </div>

                <div class="col12">
                    @error('phone_number')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                </div>

            </div>

            <button type="submit" class="btn btn-sm btn-info" >Update Profile</button>
        </form>

        <form action="{{ route('admin.admin.change_password') }}" method="POST" class="mt-3">
            @csrf
            {{method_field('PUT')}}
            <h2 class="text-dark text-center">Change password</h2>
            <!-- form -->
            <div class="form-group row">
                <div class="col-12">
                    <label>Old Password</label>
                    <input name="old_password" type="password" class="form-control" >
                </div>

                <div class="col-12">
                    @error('old_password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <label>New password</label>
                    <input name="new_password" type="password" class="form-control">
                </div>
                <div class="col-12">
                    @error('new_password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <label>Confirm password</label>
                    <input name="new_password_confirmation" type="password" class="form-control">
                </div>
                <div class="col-12">
                    @error('new_password_confirmation')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn btn-sm btn-info">Change Password</button>
        </form>
    </div>
</div>

@endsection
