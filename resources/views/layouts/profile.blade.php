<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mahmudul Hassan">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->

    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com"> -->

    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slidr.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
    <link id="preset" rel="stylesheet" href="{{ asset('front/css/presets/preset1.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">

    <!-- font -->
    <link href='../../fonts.googleapis.com/csse6c2.css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='../../fonts.googleapis.com/csse3c7.css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

    @toastr_css

    <!-- icons -->
    <link rel="icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->
</head>
<body>


       @include('front.partials.header')

        <section id="main" class="clearfix ad-profile-page">
            <div class="container">
                @include('front.partials.banner')
                        <div class="ad-profile section">
                            <div class="user-profile">
                                <div class="user-images">
                                    <img src="{{$user->gravatar()}}" alt="User Images" class="img-fluid">
                                </div>
                                <div class="user">
                                    <h2>Hello, <a href="{{ route('user.userdetails.index') }}">{{$user->name}}</a></h2>
                                </div>

                                <div class="favorites-user">
                                    <div class="my-ads">
                                        <a href="{{ route('user.userdetails.useradd') }}">{{$user->adds->count()}}<small>My ADS</small></a>
                                    </div>
                                    <div class="favorites">
                                        <a href="{{ route('user.userdetails.favoriteadd') }}">{{$user->favorites->count()}}<small>Favorites</small></a>
                                    </div>
                                </div>
                            </div><!-- user-profile -->

                            <ul class="user-menu">
                                <li class="active"><a href="{{ route('user.userdetails.index') }}">Profile</a></li>
                                <li><a href="{{ route('user.userdetails.useradd') }}">My ads</a></li>
                                <li><a href="{{ route('user.userdetails.favoriteadd') }}">Favourite ads</a></li>
                            </ul>
                        </div><!-- ad-profile -->
                        <div class="profile">
                            <div class="row">
                                <div class="col-lg-8">
                                    @yield('content')
                                </div>
                                <div class="col-md-4 text-center">
                                <div class="recommended-cta">
                                    <div class="cta">
                                        <!-- single-cta -->
                                        <div class="single-cta">
                                            <!-- cta-icon -->
                                            <div class="cta-icon icon-secure">
                                                <img src="{{ asset('front/images/icon/13.png') }}" alt="Icon" class="img-fluid">
                                            </div><!-- cta-icon -->

                                            <h4>Secure Trading</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        </div><!-- single-cta -->

                                        <!-- single-cta -->
                                        <div class="single-cta">
                                            <!-- cta-icon -->
                                            <div class="cta-icon icon-support">
                                                <img src="{{ asset('front/images/icon/14.png') }}" alt="Icon" class="img-fluid">
                                            </div><!-- cta-icon -->

                                            <h4>24/7 Support</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        </div><!-- single-cta -->


                                        <!-- single-cta -->
                                        <div class="single-cta">
                                            <!-- cta-icon -->
                                            <div class="cta-icon icon-trading">
                                                <img src="{{ asset('front/images/icon/15.png') }}" alt="Icon" class="img-fluid">
                                            </div><!-- cta-icon -->

                                            <h4>Easy Trading</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        </div><!-- single-cta -->

                                        <!-- single-cta -->
                                        <div class="single-cta">
                                            <h5>Need Help?</h5>
                                            <p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
                                        </div><!-- single-cta -->
                                    </div>
                                </div><!-- cta -->
                                </div><!-- recommended-cta-->
                            </div>
                        </div>
                </div>
            </div>
        </section>



    @include('front.partials.sell_section')

    @include('front.partials.footer')
</body>
</html>
