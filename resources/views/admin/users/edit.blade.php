@extends('layouts.admin_app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User {{$user->name}}</div>

                <div class="card-body">

                    <form action="{{ route('admin.users.update',$user) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="role" class="col-md-2 col-form-label text-md-right">Roles</label>
                            <div class="col-md-6">
                                @foreach ($roles as $role)
                                <div class="form-check">
                                    <input type="checkbox" name="roles[]" value={{$role->id}}
                                        @if ($user->roles->pluck('id')->contains($role->id))
                                            checked
                                        @endif
                                    >
                                    <label>{{$role->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <input type="submit" value="Update" class="btn btn-primary btn-sm">
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
