@extends('layouts.details')


@section('content')
    <div class="section slider">
        <div class="row">
            <!-- carousel -->
            <div class="col-lg-7">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach (json_decode($addpost->images) as $image)

                        <li data-target="#product-carousel" data-slide-to="{{$loop->index + 1}}" @if ($loop->first) class="active" @endif >
                            <img src="/storage/post_photos/{{ $image }}" alt="Carousel Thumb" class="img-fluid">
                        </li>
                        @endforeach


                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        @foreach (json_decode($addpost->images) as $image)
                        <!-- item -->
                        <div class="item carousel-item @if ($loop->first) active @endif">
                            <div class="carousel-image">
                                <!-- image-wrapper -->
                                <img src="/storage/post_photos/{{ $image }}" alt="Featured Image" class="img-fluid">
                            </div>
                        </div><!-- item -->
                        @endforeach

                    </div><!-- carousel-inner -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a><!-- Controls -->
                </div>
            </div><!-- Controls -->

            <!-- slider-text -->
            <div class="col-lg-5">
                <div class="slider-text">
                    <h2>{{$addpost->price}}TK.</h2>
                    <h3 class="title">{{$addpost->title}}</h3>
                    <p><span>Post by: <a href="{{ route('user_adds',$addpost->user->id) }}">{{$addpost->user->name}}</a></span>
                    </p>
                    <span class="icon"><i class="fa fa-clock-o"></i><a href="#">{{$addpost->created_at}}</a></span>
                    <span class="icon"><i class="fa fa-map-marker"></i><a href="#">{{$addpost->division}} - {{$addpost->area}}</a></span>


                    <!-- short-info -->
                    <div class="short-info">
                        <h4>Short Info</h4>
                        <p><strong>Condition: </strong><a href="#">{{$addpost->condition}}</a> </p>
                        <p><strong>Brand: </strong><a href="#">{{$addpost->brand_name}}</a> </p>
                        <p><strong>Type: </strong><a href="#">{{$addpost->type}}</a> </p>
                        <p><strong>Features: </strong>
                            @foreach ($addpost->tags as $tag)
                                <a href="{{ route('tag_adds',$tag->name) }}"class="tag"><i class="fa fa-tags"></i>{{$tag->name}}</a>
                            @endforeach
                        </p>

                    </div><!-- short-info -->

                    <!-- contact-with -->
                    <div class="contact-with">
                        <h4>Contact with </h4>
                        <span class="btn btn-red show-number">
                            <i class="fa fa-phone-square"></i>
                            <span class="hide-text">Click to show phone number </span>
                            <span class="hide-number">{{$addpost->user->phone_number}}</span>

                        </span>
                        <a href="javascript:void(0)" class="btn"><i class="fa fa-envelope-square"></i>{{$addpost->user->email}}</a>
                    </div><!-- contact-with -->

                    <!-- social-links -->
                    <div class="social-links">
                        <h4>Share this ad</h4>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
                        </ul>
                    </div><!-- social-links -->
                </div>
            </div><!-- slider-text -->
        </div>

    </div>

    <div class="description-info">
                <div class="row">
                    <!-- description -->
                    <div class="col-md-8">
                        <div class="description">
                            <h4>Description</h4>
                            <p>{{$addpost->description}}</p>
                        </div>
                    </div><!-- description -->

                    <!-- description-short-info -->
                    <div class="col-md-4">
                        <div class="short-info">
                            <h4>Short Info</h4>
                            <!-- social-icon -->
                            <ul>
                                <li><i class="fa fa-shopping-cart"></i><a href="javascript:void(0)">Delivery: Meet in person</a></li>
                                <li><i class="fa fa-user-plus"></i><a href="{{ route('user_adds',$addpost->user->id) }}">More ads by <span>{{$addpost->user->name}}</span></a></li>
                                <li><i class="fa fa-heart-o"></i><a href="{{ route('user.userdetails.save_as_favorite',$addpost->id) }}">Save ad as Favorite</a></li>
                                <li><i class="fa fa-exclamation-triangle"></i><a href="#">Report this ad</a></li>
                            </ul><!-- social-icon -->
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- description-info -->
@endsection
