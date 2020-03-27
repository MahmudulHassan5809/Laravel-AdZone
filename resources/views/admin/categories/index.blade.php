@extends('layouts.admin_app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                           All Categories
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-inverse table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Slug Name</th>
                                        <th>Category Image</th>
                                        <th>Category Posts</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>
                                            @if ($category->image)
                                                <img src="/storage/category_photos/{{$category->image}}" alt="" width="20px">
                                            @else
                                                <img src="/storage/category_photos/default.png" alt="" width="20px">
                                            @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.category.ads',$category->id) }}" class="btn btn-sm btn-info">
                                                    View
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                            </td>
                                            <td>
                                            <form
                                            class="d-inline"
                                            action="{{ route('admin.categories.destroy',$category) }}"
                                            method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}

                                                <button class="btn btn-danger btn-sm">
                                                   Delete
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
                <div class="col-md-6">
                    <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    Add Category
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset ($edit_category)
                            {{method_field('PUT')}}
                        @endisset


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name',$edit_category->name ?? null)}}" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Category Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control"  name="image">

                                @error('image')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @isset($edit_category)
                            <div class="form-group row">
                                <div class="col-md-12 text-center">
                                    <img src="/storage/category_photos/{{$edit_category->image}}" alt="" class="img-fluid" width="100px">
                                </div>
                            </div>
                        @endisset


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   @if (isset($edit_category))
                                       Edit
                                    @else
                                     Add
                                   @endif
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
