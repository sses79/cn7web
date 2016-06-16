@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Features
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/ihover/src/ihover.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/demo/css/styles.css') }}">
@stop


{{-- Page content --}}
@section('content')

    <!-- Carousel Section Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="{{ asset('assets/images/slider_1.jpg') }}" alt="slider-image"
                               class="img-responsive">
        </div>
        <div class="item"><img src="{{ asset('assets/images/slider_2.jpg') }}" alt="slider-image"
                               class="img-responsive">
        </div>
        <div class="item"><img src="{{ asset('assets/images/slider_3.jpg') }}" alt="slider-image"
                               class="img-responsive">
        </div>
    </div>
    <!-- //Carousel Section End -->

    <div class="light-bg">
        <div class="container">
            <div class="row services">
                <h3>
                    <label class="border-bottom">Featured Story
                    </label>
                </h3>
                <!-- Features Image Section Start -->
                <div class="col-md-6 col-sm-6">
                    <div id="devices" data-position="left" class="notViewed animBlock">
                        <div class="c1_image">
                            <img src="{{ asset('assets/images/c1.png') }}" class="img-responsive">
                        </div>
                    </div>
                </div>
                <!-- //Features Image Section End -->
                <!-- Paragraph Text Section Start -->
                <div class="col-md-6 col-sm-6">
                    <div id="devicesTxt" data-position="right" class="notViewed animBlock">
                        <div class="lorem_heading">
                            <h4><b>There will probably be no new hardware at WWDC 2016</b></h4>
                            <p>If you were hoping to see the iPhone 7 at WWDC 2016 on June 13, chances are, you will get
                                disappointed. In fact, industry insiders hint that the Worldwide Developers Conference
                                will adhere to its original purpose and stick to software and software alone. This
                                means, most-likely leaving the iPhone announcements on their usual September schedule,
                                but also probably skipping on any new MacBook Pro with an OLED touch display above the
                                keyboard, that has been floating around in the rumor mill.</p>
                            <p>However, this definitely doesn't mean that there are no new announcements to get excited
                                about. IOS 10 should make its official debut at the venue and so should other big
                                software updates across the entire Apple device ecosystem. The new mobile OS promises
                                another round of UI refinements, with the Apple Music app, likely getting a major
                                redesign for a bolder, yet more simplistic look, as the company puts it.</p>
                            <p>Another popular rumor hints at Apple Pay support for web browsers, so people can make
                                purchases through Safari, as well as integration into iMessage for money transfers. </p>
                        </div>
                    </div>
                </div>
                <!-- //Paragraph Text Section End -->
            </div>
        </div>
    </div>
    <!-- //Features Section End -->
    <!-- Meet Our Team Section Start -->
    <div class="team-bg">
        <div class="container">
            <div class="about-headings">
                <h3>New phones of the week: LG, Asus, Sony, ZUK and Jolla!</h3>
                <h5 class="text-dark">Wow, this was a long week! In the span of just 7 days an impressive number of new
                    phones were unveiled - here's what you might have missed.</h5>
            </div>
            <!-- //Meet Our Team Section End -->
            <!-- Team Images Section Start -->
            <div class="team">
                <!-- Ceo Section Start -->
                <div class="col-md-3 col-sm-6">
                    <div data-position="left" data-offset="100" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile1.png') }}" class="img-responsive">
                        <h4><b>Jolla</b></h4>
                        <h5><b class="ceo-text">Nokia's Linux efforts</b></h5>
                        <br/>
                        <p>The spiritual successor of Nokia's Linux efforts has had a rocky ride. It's still going though and as a token of appreciation for its
                            community, it's making 1,000 Jolla C phones available to members of the Sailfish Community
                            Device Program.</p>
                    </div>
                </div>
                <!-- //Ceo Section End -->
                <!-- Director Section Start -->
                <div class="col-md-3 col-sm-6">
                    <div data-position="right" data-offset="50" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile2.png') }}" class="img-responsive">
                        <h4><b>Sony Xperia E5</b></h4>
                        <h5><b>Xperia E5 is coming soon for £200</b></h5>
                        <br/>
                        <p>This Xperia XA-lookalike has a 5" 720p screen, a MediaTek chipset (quad-core, 1.5GB RAM), a
                            13MP camera plus 5MP selfie cam, both have LED flash. It's a dual-SIM phone that promises up
                            to two days of use from its 2,700mAh battery.</p>
                    </div>
                </div>
                <!-- //Director Section End -->
                <!-- Designer Section Start -->
                <div class="col-md-3 col-sm-6">
                    <div data-position="left" data-offset="50" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile3.png') }}" class="img-responsive">
                        <h4><b>LG Stylus 2 Plus</b></h4>
                        <h5><b>5.7" 1080p screen</b></h5>
                        <br/>
                        <p>Things got bigger with the LG Stylus 2 Plus. The 5.7" 1080p screen is paired with a stylus
                            (hence the name) and a new, beefier Snapdragon 430 (double the CPU cores of the 410 and a
                            next-gen GPU). The Stylus 2 Plus is launching in late June for TWD 10,990 ($340) in
                            Taiwan.</p>
                    </div>
                </div>
                <!-- //Designer Section End -->
                <!-- Developer Section Start -->
                <div class="col-md-3 col-sm-6">
                    <div data-position="right" data-offset="100" class="notViewed animBlock">
                        <img src="{{ asset('assets/images/profile4.png') }}" class="img-responsive">
                        <h4><b>Asus Zenfone 3 Ultra</b></h4>
                        <h5><b>Snapdragon 625, 4GB of RAM</b></h5>
                        <br/>
                        <p>The awaited 3rd generation of Zenfone was unveiled this week. The base Asus Zenfone 3 has a
                            5.5" 1080p screen (with slim bezels), a Snapdragon 625 chipset with 4GB of RAM and a 16MP
                            camera with Asus TriTech AF (a combo of laser, phase and contrast focusing).</p>
                    </div>
                </div>
                <!-- //Developer Section End -->
            </div>
        </div>
    </div>
    <!-- //Meet our Team Section End -->
    <!-- Testimonial Section Start -->
    <div class="container services marg-btm10">
        <h3>
            <label class="border-bottom">News</label>
        </h3>
        <div class="col-sm-6">
            <div data-position="left" class="notViewed animBlock">
                <div class="testimonial">
                    <p>Remember that odd Nexus 6P that got benchmarked in April with a Qualcomm Snapdragon 820 chipset
                        on board? Well, it doesn't look all that odd anymore. Yesterday evening Huawei
                        launched its P9 series, and during an interview at the
                        event Charlene Munilall, the Chinese company's general manager in the country made a very
                        interesting statement.
                    </p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ asset('assets/images/d2.jpg') }}" alt="image"
                             style="border-radius:50%; width:100px; height:100px;">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><i>Batman</i></h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div data-position="right" class="notViewed animBlock">
                <div class="testimonial1">
                    <p>
                        Microsoft has announced a new watch face for Android Wear. The watch face comes as part of the
                        Outlook app and should increase the utility of your Android Wear device if you're an Outlook
                        user. One of the features of the new watch face is that marks the edges of the watch dial
                        corresponding to events in your calendar.
                    </p>
                </div>
            </div>
            <div class="media">
                <div class="media-right">
                    <a href="#">
                        <img class="media-object profile-right-img" src="{{ asset('assets/images/d1.jpg') }}"
                             alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading profile-right-text"><i>Superman</i></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- //Testimonial Section End -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/demo/js/scrollview.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/feature.js') }}"></script>
@stop
