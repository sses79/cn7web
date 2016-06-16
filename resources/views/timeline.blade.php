@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Timeline
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/vendors/vertical-timeline/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendors/vertical-timeline/css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/frontend/timeline.css') }}" type="text/css">

@stop


{{-- Page content --}}
@section('content')
    <div class="bg">
        <div class="container">
            <div class="services">
                <h2><label class="border-bottom mrg_lft12">News Timeline</label></h2>
            </div>
            <div class="row">
                <section id="cd-timeline" class="cd-container">
                @foreach ($news as $s_news)
                    <!-- cd-timeline-block -->
                        <div class="cd-timeline-block">
                            <!-- cd-timeline-img -->
                            <div class="cd-timeline-img cd-movie">
                                <img src="{{ asset("assets/images/$s_news->imageUrl") }}" alt="Picture" width="60"
                                     height="60"
                                     class="img-circle">
                            </div>
                            <!-- cd-timeline-content -->
                            <div class="cd-timeline-content">
                                <h2>{{ $s_news->title }}</h2>
                                <p>
                                    {{ $s_news->content }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <img src="{{ asset('assets/images/cpu.png') }}" alt="Picture" width="60" height="60"
                                 class="img-circle">
                        </div>

                        <div class="cd-timeline-content">
                            <h2>Another batch of OnePlus 3 live images surfaces online</h2>
                            <p>OnePlus is definitely no stranger to viral marketing and it is no wonder the upcoming
                                OnePlus 3 has been stirring up so much excitement online. </p>
                        </div>
                        <!-- cd-timeline-content --> </div>
                    <!-- cd-timeline-block -->
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <img src="{{ asset('assets/images/cable.png') }}" alt="Picture" width="60" height="60"
                                 class="img-circle"></div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Win10-powered HP Elite x3 spotted with fingerprint scanner</h2>
                            <p>Remember the Windows 10-powered HP Elite x3 smartphone that was unveiled back in February
                                during this year's Mobile World Congress (MWC)? Well, the device was spotted at the
                                ongoing Computex 2016, and looks like it has gained a fingerprint scanner.
                            </p>
                        </div>
                        <!-- cd-timeline-content --> </div>
                    <!-- cd-timeline-block -->
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-location">
                            <img src="{{ asset('assets/images/startup.png') }}" alt="Picture" width="60" height="60"
                                 class="img-circle"></div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>LeEco Le Max 2 6GB RAM variant goes up for pre-order</h2>
                            <p>As you might already know, the LeEco Le Max 2 - which was unveiled back in April this
                                year - comes in 4GB as well as 6GB RAM variants. But, only the 4GB variant has been
                                available for purchase all this while. That, however, will soon change as the company
                                has started accepting pre-orders for the 6GB version.
                            </p>
                        </div>
                        <!-- cd-timeline-content --> </div>
                    <!-- cd-timeline-block -->
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-location">
                            <img src="{{ asset('assets/images/computing-cloud.png') }}" alt="Picture" width="60"
                                 height="60" class="img-circle"></div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>ZUK Z2 scores more than 6 million registrations for its first sale</h2>
                            <p>As you might already know, the ZUK Z2 - which was made official in China earlier this
                                week - is set to go on sale on June 7. The device is currently up for registration, and
                                the company has now revealed that the total number of registrations has already crossed
                                the 6 million mark.
                            </p>
                        </div>
                        <!-- cd-timeline-content --> </div>
                    <!-- cd-timeline-block -->
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <img src="{{ asset('assets/images/font.png') }}" alt="Picture" width="60" height="60"
                                 class="img-circle"></div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>New Galaxy Note 6/7</h2>
                            <p>We've already taken a look at 3D sketches depicting what the upcoming Samsung Galaxy Note
                                6 (or Note 7) might look like. And now, a new render of the device has been leaked
                                revealing the device's dimensions.</p>
                        </div>
                        <!-- cd-timeline-content --> </div>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-location">
                            <img src="{{ asset('assets/images/layers.png') }}" alt="Picture" width="60" height="60"
                                 class="img-circle"></div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Huawei plans to launch a new Honor smartphone in Europe on June 20</h2>
                            <p>Today Huawei has started sending out media invites for a "virtual launch" that will be
                                taking place on June 20. At that point, the Chinese company's Honor sub-brand will be
                                unveiling a new and "exciting" product in Europe. This will apparently be "fast, robust,
                                and affordable", as you can see from the invite pictured below.
                            </p>
                        </div>
                        <!-- cd-timeline-content --> </div>
                    <!-- cd-timeline-block -->
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-movie">
                            <img src="{{ asset('assets/images/mouse.png') }}" alt="Picture" width="60" height="60"
                                 class="img-circle"></div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>AT&T's Lumia 640 and Verizon's Lumia 735 get Windows 10 Mobile</h2>
                            <p>Starting today, two more smartphones are receiving updates to Windows 10 Mobile. We're
                                talking about the AT&T version of the Microsoft Lumia 640 and Verizon's Lumia 735 model.
                                Both of them are now in the process of being updated to Windows 10 Mobile
                                over-the-air.</p>
                        </div>
                        <!-- cd-timeline-content --> </div>
                    <!-- cd-timeline-block -->
                </section>
                <!-- cd-timeline -->
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/vertical-timeline/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/vertical-timeline/js/modernizr.js') }}" type="text/javascript"></script>
@stop
