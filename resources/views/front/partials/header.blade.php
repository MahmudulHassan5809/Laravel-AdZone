<!-- header -->
    <header id="header" class="clearfix">
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tr-mainmenu" aria-controls="tr-mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>

                <a class="navbar-brand" href="{{ route('home') }}"><img class="img-fluid" src="{{ asset('front/images/logo.png') }}" alt="Logo"></a>

                <div class="collapse navbar-collapse" id="tr-mainmenu">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        @auth
                            <li><a href="{{ route('user.userdetails.index') }}">My Profile</a></li>
                        @endauth

                        <li><a href="{{ route('help_support') }}">Help/Support</a></li>
                    </ul>
                </div>

                <div class="nav-right">
                    @guest
                    <!-- sign-in -->
                    <ul class="sign-in">
                        <li><i class="fa fa-user"></i></li>
                        <li><a href="{{ route('login') }}"> Sign In </a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    </ul><!-- sign-in -->
                    @else
                    <a href="{{ route('user.addpost.create') }}" class="btn">Post Your Ad</a>
                    <a class="btn" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endif
                </div>

            </div><!-- container -->
        </nav><!-- navbar -->
    </header><!-- header -->
