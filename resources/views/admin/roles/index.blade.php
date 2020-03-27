@extends('layouts.admin_app')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    All Roles
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-inverse table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.roles.edit',$role->id) }}" class="btn btn-sm btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                    <form
                                    class="d-inline"
                                    action="{{ route('admin.roles.destroy',$role) }}"
                                    method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
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
