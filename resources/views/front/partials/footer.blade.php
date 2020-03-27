<!-- footer -->
    <footer id="footer" class="clearfix">
        <!-- footer-top -->
        <section class="footer-top clearfix">
            <div class="container">
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="footer-widget">
                            <h3>Quik Links</h3>
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="javascript:void(0)">Contact Us</a></li>
                                <li><a href="javascript:void(0)">Careers</a></li>
                                <li><a href="javascript:void(0)">All Cities</a></li>
                                <li><a href="{{ route('help_support') }}">Help & Support</a></li>
                                <li><a href="javascript:void(0)">Advertise With Us</a></li>
                                <li><a href="javascript:void(0)">Blog</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget -->

                    <!-- footer-widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="footer-widget">
                            <h3>How to sell fast</h3>
                            <ul>
                                <li><a href="javascript:void(0)">How to sell fast</a></li>
                                <li><a href="javascript:void(0)">Membership</a></li>
                                <li><a href="javascript:void(0)">Banner Advertising</a></li>
                                <li><a href="javascript:void(0)">Promote your ad</a></li>
                                <li><a href="javascript:void(0)">Trade Delivers</a></li>
                                <li><a href="javascript:void(0)">FAQ</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget -->

                    <!-- footer-widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="footer-widget social-widget">
                            <h3>Follow us on</h3>
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-youtube-play"></i>youtube</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget -->

                    <!-- footer-widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="footer-widget news-letter">
                            <h3>Newsletter</h3>
                            <p>Trade is Worldest leading classifieds platform that brings!</p>
                            <!-- form -->
                            <form action="javascript:void(0)">
                                <input type="email" class="form-control" placeholder="Your email id">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </form><!-- form -->
                        </div>
                    </div><!-- footer-widget -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- footer-top -->


        <div class="footer-bottom clearfix text-center">
            <div class="container">
                <p>Copyright &copy; 2020. Developed by <a href="https://github.com/MahmudulHassan5809/">Mahmudul Hassan</a></p>
            </div>
        </div><!-- footer-bottom -->
    </footer><!-- footer -->

    <!--/Preset Style Chooser-->
    <div class="style-chooser">
        <div class="style-chooser-inner">
            <a href="javascript:void(0)" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
            <h4>Presets</h4>
            <ul class="preset-list clearfix">
                <li class="preset1 active" data-preset="1"><a href="javascript:void(0)" data-color="preset1"></a></li>
                <li class="preset2" data-preset="2"><a href="javascript:void(0)" data-color="preset2"></a></li>
                <li class="preset3" data-preset="3"><a href="javascript:void(0)" data-color="preset3"></a></li>
                <li class="preset4" data-preset="4"><a href="javascript:void(0)" data-color="preset4"></a></li>
            </ul>
        </div>
    </div>
    <!--/End:Preset Style Chooser-->

     <!-- JS -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('front/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/scrollup.min.js') }}"></script>
    <script src="{{ asset('front/js/price-range.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('front/js/switcher.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-73239902-1', 'auto');
      ga('send', 'pageview');

    </script>

    @toastr_js

    @toastr_render
