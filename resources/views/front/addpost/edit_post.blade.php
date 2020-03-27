@extends('layouts.post')
@section('content')


    <form action="{{ route('user.addpost.update',$addpost->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <fieldset>
            <div class="section postdetails">
                <h4>Edit {{$addpost->title}} <span class="pull-right">* Mandatory Fields</span></h4>

                <div class="row form-group">
                    <label class="col-sm-3">Category<span class="required">*</span></label>
                    <div class="col-sm-9 user-type">
                        <select name="category" class="form-control">
                            @foreach ($all_categories as $category)
                                <option value="{{$category->id}}"
                                    @if ($category->id == $addpost->category_id)
                                        selected
                                    @endif
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                         @error('category')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-3">Division<span class="required">*</span></label>
                    <div class="col-sm-9 user-type">

                        <select name="division" class="form-control">
                            @foreach ($all_division as $division)
                                <option value="{{$division}}"
                                    @if ($division == $addpost->division)
                                       selected
                                    @endif
                                >{{$division}}</option>
                            @endforeach
                        </select>
                         @error('division')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                 <div class="row form-group select-price">
                    <label class="col-sm-3 label-title">Your Location<span class="required">*</span></label>
                    <div class="col-sm-9">

                        <input value="{{$addpost->area}}" name="area" type="text" class="form-control" id="area">
                         @error('area')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group add-title">
                    <label class="col-sm-3 label-title">Title for your Ad<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input value="{{$addpost->title}}" type="text" name="title" class="form-control" id="text" placeholder="ex, Sony Xperia dual sim 100% brand new ">
                         @error('title')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group select-price">
                    <label class="col-sm-3 label-title">Price<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <label>$BDT</label>
                        <input value="{{$addpost->price}}" name="price" type="text" class="form-control" id="text1">
                         @error('price')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group brand-name">
                    <label class="col-sm-3 label-title">Brand Name<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" value="{{$addpost->brand_name}}" name="brand_name" class="form-control" placeholder="ex, Sony Xperia">
                         @error('brand_name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group item-description">
                    <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <textarea  name="description" class="form-control" id="textarea" placeholder="Write few lines about your products" rows="8">{{$addpost->description}}</textarea>
                         @error('description')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="row form-group">
                    <input type="submit" value="Edit Post" class="btn btn-primary btn-block">
                </div>
            </div><!-- section -->
        </fieldset>
    </form><!-- form -->





@endsection
