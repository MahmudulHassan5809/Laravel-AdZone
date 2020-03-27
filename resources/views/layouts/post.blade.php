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

        <section id="main" class="clearfix ad-details-page">
            <div class="container">
                @include('front.partials.banner')
                <div class="adpost-details">
                    <div class="row">
                        <div class="col-lg-8">
                            @yield('content')
                        </div>
                        <div class="col-lg-4">
                            <div class="section quick-rules">
                            <h4>Quick rules</h4>
                            <p class="lead">Posting an ad on <a href="#">Trade.com</a> is free! However, all ads must follow our rules:</p>

                            <ul>
                                <li>Make sure you post in the correct category.</li>
                                <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                <li>Do not upload pictures with watermarks.</li>
                                <li>Do not post ads containing multiple items unless it's a package deal.</li>
                                <li>Do not put your email or phone numbers in the title or description.</li>
                                <li>Make sure you post in the correct category.</li>
                                <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                <li>Do not upload pictures with watermarks.</li>
                                <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            </ul>
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
