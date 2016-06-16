@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Portfolio
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
    <!-- Container Section Start -->
    <div class="container">
        <!-- Phones Section Start -->
        <div class="services">
            <h3>
                <label class="border-bottom">New</label>
            </h3>
        </div>
        <!-- //Phones Section End -->
        <!-- Text-bg Section Start -->
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="left_text_box">
                    <h3>Free next working day delivery</h3> When you order before midnight. Returns are free, get a
                    refund
                    or exchange if you change your mind within 14 days.
                    <br/>
                </div>
            </div>
        </div>
        <!-- Text-bg Section End -->
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="box">
                    <div class="info">
                        <h3 class="text-primary">Collection and delivery</h3>
                        <p>Get free delivery on all our devices, sims and accessories.
                            If you order before midnight Sunday - Thursday, you'll get your device the next working day.
                            Or click and collect to pick up your order from your local O2 store.
                            Collection times could vary depending on stock and staff availability. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="box">
                    <div class="info">
                        <h3 class="text-primary">Home delivery</h3>
                        <p>Order by midnight and you’ll get free delivery the next working day, to non-remote locations.
                            If you order after 11pm, your order will arrive between 6pm-10pm the next working day.
                            You’ll get a text on the day of delivery to let you know when your order should arrive. Or,
                            if you need to, you can reschedule the delivery.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="box">
                    <div class="info">
                        <h3 class="text-primary">Premium delivery</h3>
                        <p>If you're not going to be around all day, you can pay for our premium delivery service to
                            choose a time that suits you. You can pick a morning, afternoon or evening slot. You can
                            even get your delivery over the weekend.
                            Premium delivery isn’t available in remote locations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container Section End -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/demo/js/scrollview.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/feature.js') }}"></script>
@stop
