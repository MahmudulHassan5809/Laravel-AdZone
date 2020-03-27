@extends('layouts.admin_app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table class="table table-bordered table-inverse table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>


                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>

                            <td>{{$user->email}}</td>
                            <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                            <td>

                                   <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-sm btn-success">Edit</a>




                                    <form
                                    class="d-inline"
                                    action="{{ route('admin.users.destroy',$user) }}"
                                    method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>




                            </td>
                        </tr>
                         @endforeach
                    </tbody>

                   </table>

                </div>
            </div>
        </div>
    </div>

@endsection
