@extends('layouts.profile')


@section('content')
                        <div class="user-pro-section">
                            <!-- profile-details -->
                            <div class="profile-details section">
                                <form action="{{ route('user.userdetails.update',$user->id) }}" method="POST">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <h2>Profile Details</h2>
                                    <!-- form -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label>Username</label>
                                            <input name="name" type="text" class="form-control" value="{{$user->name}}">
                                        </div>
                                        <div class="col-6 mx-auto">
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
                                         <div class="col-6 mx-auto">
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

                                        <div class="col6 mx-auto">
                                            @error('phone_number')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-sm btn-info" >Update Profile</button>
                                </form>
                            </div><!-- profile-details -->

                            <!-- change-password -->
                            <div class="change-password section">
                                <form action="{{ route('user.userdetails.change_password') }}" method='POST'>
                                    @csrf
                                    {{method_field('PUT')}}
                                    <h2>Change password</h2>
                                    <!-- form -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label>Old Password</label>
                                            <input name="old_password" type="password" class="form-control" >
                                        </div>

                                        <div class="col-6 mx-auto">
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
                                        <div class="col-6 mx-auto">
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
                                        <div class="col-6 mx-auto">
                                            @error('new_password_confirmation')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-sm btn-info">Change Password</button>
                                </form>
                            </div><!-- change-password -->




                        </div><!-- user-pro-edit -->
@endsection
