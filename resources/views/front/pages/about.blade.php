@extends('layouts.app')

@section('content')
<div class="section about">
                <div class="about-info">
                    <div class="row">
                        <!-- about-us-images -->
                        <div class="col-lg-6">
                            <div class="about-us-images">
                                <img src="{{ asset('front/images/about-us/1.jpg') }}" alt="About us Image" class="img-fluid">
                            </div>
                        </div><!-- about-us-images -->

                        <!-- about-text -->
                        <div class="col-lg-6">
                            <div class="about-text">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do</h3>
                                <!-- description-paragraph -->
                                <div class="description-paragraph">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div><!-- description-paragraph -->

                                <!-- description-paragraph -->
                                <div class="description-paragraph"><p> velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p></div>
                            </div><!-- description-paragraph -->
                        </div><!-- about-text -->
                    </div>
                </div><!-- about-info -->


                <div class="approach">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="our-approach">
                                <h3>Backgrounds</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div><!-- about-text -->

                        <!-- about-text -->
                        <div class="col-md-4 text-center">
                            <div class="our-approach">
                                <h3>Our Approach</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                        </div><!-- about-text -->

                        <!-- about-text -->
                        <div class="col-md-4 text-center">
                            <div class="our-approach">
                                <h3>Methodology</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div><!-- about-text -->
                    </div>
                </div>

                <div class="team-section">
                    <h3>Trade Team Member</h3>
                    <div class="team-members">
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/2.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Leaf Corcoran</h4>
                        </div><!-- team-member -->

                        <!-- team-member -->
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/3.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Mike Lewis</h4>
                        </div><!-- team-member -->

                        <!-- team-member -->
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/4.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Julie MacKay</h4>
                        </div><!-- team-member -->

                        <!-- team-member -->
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/5.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Christine Marquardt</h4>
                        </div><!-- team-member -->

                        <!-- team-member -->
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/6.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Loren Heiman</h4>
                        </div><!-- team-member -->

                        <!-- team-member -->
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/7.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Chris Taylor</h4>
                        </div><!-- team-member -->

                        <!-- team-member -->
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/8.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Alex Posey</h4>
                        </div><!-- team-member -->

                        <!-- team-member -->
                        <div class="team-member">
                            <!-- team-member-image -->
                            <div class="team-member-image">
                                <img src="{{ asset('front/images/about-us/9.jpg') }}" alt="Team Member" class="img-fluid">
                                <!-- social -->
                                <div class="team-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    </ul><!-- social -->
                                </div>
                            </div><!-- team-member-image -->
                            <h4>Teddy Newell</h4>
                        </div><!-- team-member -->






                    </div><!-- team-members -->
                </div><!-- team-members -->
            </div><!-- about -->
@endsection
