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

        <section id="main" class="clearfix category-page main-categories">
            <div class="container">
                <div class="breadcrumb-section">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Add Zone</li>
                    </ol><!-- breadcrumb -->
                    <h2 class="title">{{$title}}</h2>
                </div>
                @include('front.partials.banner')
                <div class="category-info">
                    <div class="row">
                        <!-- accordion-->
                        @include('front.partials.category', ['some' => 'data'])
                        <div class="col-md-8 col-lg-7">
                            @yield('content')
                        </div>
                        <div class="col-md-2 d-none d-lg-block">
                            <div class="advertisement text-center">
                                <a href="#"><img src="{{ asset('front/images/ads/2.jpg') }}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



    @include('front.partials.sell_section')

    @include('front.partials.footer')
</body>
</html>
