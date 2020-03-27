@extends('layouts.profile')

@section('content')

    <div class="my-ads section">
        <h2>My Favorite ads</h2>
        <!-- ad-item -->
        @foreach ($userAdds as $add)
            <div class="ad-item row">
                <!-- item-image -->
                <div class="item-image-box col-lg-4">
                    <div class="item-image">
                        @foreach (json_decode($add->images) as $image)
                        @if ($loop->first)
                           <a href="{{ route('user.addpost.show',$add->id) }}"><img src="/storage/post_photos/{{ $image }}" alt="Image" class="img-fluid"></a>
                        @endif

                        @endforeach

                    </div><!-- item-image -->
                </div>

                <!-- rending-text -->
                <div class="item-info col-lg-8">
                    <!-- ad-info -->
                    <div class="ad-info">
                        <h3 class="item-price">$800.00</h3>
                        <h4 class="item-title"><a href="{{ route('user.addpost.show',$add->id) }}">{{$add->title}}</a></h4>
                        <div class="item-cat">
                            <span><a href="#">{{$add->category->name}}</a></span> <br>
                            <span><a href="#">{{$add->brand_name}}</a></span>
                        </div>
                    </div><!-- ad-info -->

                    <!-- ad-meta -->
                    <div class="ad-meta">
                        <div class="meta-content">
                            <span class="dated">Posted On: <a href="#">{{$add->created_at}}</a></span>
                        </div>
                        <!-- item-info-right -->
                        <div class="user-option pull-right">
                            <a class="delete-item" href="{{ route('user.userdetails.removefavorite',$add->id) }}" data-toggle="tooltip" data-placement="top" title="Remove From Favorite"><i class="fa fa-times"></i></a>
                        </div><!-- item-info-right -->
                    </div><!-- ad-meta -->
                </div><!-- item-info -->
            </div><!-- ad-item -->
        @endforeach
    </div>

@endsection


