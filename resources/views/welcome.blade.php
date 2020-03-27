@extends('layouts.app')

@section('content')
<div class="section recommended-ads">
    <!-- featured-top -->
    <div class="featured-top">
        <h4>Recommended Ads for You</h4>

    </div><!-- featured-top -->



    @foreach ($all_posts as $addpost)
        <div class="row mb-2">
            <div class="item-image-box col-lg-4">

                @foreach (json_decode($addpost->images) as $image)

                    @if ($loop->first)
                       <div class="item-image">
                            <a href="{{ route('user.addpost.show',$addpost->id) }}"><img src="/storage/post_photos/{{$image}}" alt="Image" class="img-fluid"></a>
                        </div>
                    @endif
                @endforeach

            </div>

            <!-- rending-text -->
            <div class="item-info col-lg-8">
                <!-- ad-info -->
                <div class="ad-info">
                    <h3 class="item-price">{{$addpost->price}}<span>TK</span></h3>
                    <h4 class="item-title"><a href="{{ route('user.addpost.show',$addpost->id) }}">{{$addpost->title}}</a></h4>
                    <div class="item-cat">
                        <span><a href="{{ route('category_adds',$addpost->category->slug) }}">{{$addpost->category->name}}</a></span> <br>
                        <span><a href="javascript:void(0)">{{$addpost->brand_name}}</a></span>
                    </div>
                </div><!-- ad-info -->

                <!-- ad-meta -->
                <div class="ad-meta">
                    <div class="meta-content">
                        <span class="dated"><a href="#">{{$addpost->created_at}}</a></span>
                        <a href="javascript:void(0)" class="tag"><i class="fa fa-tags"></i> {{$addpost->condition}}</a>
                    </div>
                    <!-- item-info-right -->
                    <div class="user-option pull-right">
                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="{{$addpost->area}}"><i class="fa fa-map-marker"></i> </a>
                        <a href="{{ route('user_adds',$addpost->user->id) }}" data-toggle="tooltip" data-placement="top" title="{{$addpost->user->name}}"><i class="fa fa-user"></i> </a>
                    </div><!-- item-info-right -->
                </div><!-- ad-meta -->
            </div><!-- item-info -->
        </div>
    @endforeach

    <!-- pagination  -->
        {{$all_posts->links()}}
    <!-- pagination  -->

</div>


@endsection
