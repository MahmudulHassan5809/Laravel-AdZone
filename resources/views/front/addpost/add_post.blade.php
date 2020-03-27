@extends('layouts.post')
@section('content')


    <form action="{{ route('user.addpost.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <fieldset>
            <div class="section postdetails">
                <h4>Sell an item or service <span class="pull-right">* Mandatory Fields</span></h4>

                <div class="row form-group">
                    <label class="col-sm-3">Category<span class="required">*</span></label>
                    <div class="col-sm-9 user-type">
                        <select name="category" class="form-control">
                            @foreach ($all_categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
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
                                <option value="{{$division}}">{{$division}}</option>
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

                        <input value="{{old('area')}}" name="area" type="text" class="form-control" id="area">
                         @error('area')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-3">Type of ad<span class="required">*</span></label>
                    <div class="col-sm-9 user-type">
                        <select name="type" class="form-control">
                            @foreach ($add_type as $key => $type)
                            <option value="{{$key}}">{{$type}}</option>
                        @endforeach
                        </select>
                         @error('type')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group add-title">
                    <label class="col-sm-3 label-title">Title for your Ad<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input value="{{old('title')}}" type="text" name="title" class="form-control" id="text" placeholder="ex, Sony Xperia dual sim 100% brand new ">
                         @error('title')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group add-image">
                    <label class="col-sm-3 label-title">Photos for your ad <span>(This will be your cover photo )</span> </label>
                    <div class="col-sm-9">
                        <h5><i class="fa fa-upload" aria-hidden="true"></i><span>You can add multiple images.</span></h5>
                        <div class="upload-section">
                            <label class="upload-image" for="upload-image-one">
                                <input type="file" name="images[]" id="upload-image-one" multiple>
                            </label>


                        </div>
                        @error('images')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group select-condition">
                    <label class="col-sm-3">Condition<span class="required">*</span></label>
                    <div class="col-sm-9">
                       <select name="condition" class="form-control">
                            @foreach ($condition_type as $key => $type)
                            <option value="{{$key}}">{{$type}}</option>
                        @endforeach
                        </select>
                         @error('condition')
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
                        <input value="{{old('price')}}" name="price" type="text" class="form-control" id="text1">
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
                        <input type="text" value="{{ old('brand_name') }}" name="brand_name" class="form-control" placeholder="ex, Sony Xperia">
                         @error('brand_name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group additional">
                    <label class="col-sm-3 label-title">Tags<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" value="{{old('tags')}}" class="form-control" name="tags" placeholder="Comma sepatred Tag">
                         @error('tags')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row form-group item-description">
                    <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <textarea  name="description" class="form-control" id="textarea" placeholder="Write few lines about your products" rows="8">{{old('description')}}</textarea>
                         @error('description')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="row form-group">
                    <input type="submit" value="Add Post" class="btn btn-primary btn-block">
                </div>
            </div><!-- section -->
        </fieldset>
    </form><!-- form -->





@endsection
