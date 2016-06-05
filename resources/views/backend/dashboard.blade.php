@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')Dashboard @parent

@stop
    {{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/toastr/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
{{--    <link href="{{ asset('assets/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.css') }}" rel="stylesheet" type="text/css" />--}}
    <link href="{{ asset('assets/css/custom_css/toastr.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom_css/dashboard.css') }}" rel="stylesheet" type="text/css" />
    @stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
                <!--section starts-->
                <h1>Welcome To Dashboard</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-fw fa-home"></i>
                            Dashboard (demo data)
                        </a>
                    </li>

                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row row-spacing">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default1">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table1 table bottom-pad" id="users">
                                        <tr >
                                            <td class="bodr">Visits : 5,100</td>
                                            <td class="bodr">
                                                <span class="pull-right  mini-graph"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>New Orders : 1,123</td>
                                            <td>
                                                <span class=" pull-right   mini-graph2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Profit Gain : 2,654</td>
                                            <td>
                                                <span class=" pull-right   mini-graph3"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Page views : 1,050</td>
                                            <td>
                                                <span class=" pull-right   mini-graphpie"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Server Up : 99</td>
                                            <td>
                                                <span class=" pull-right   mini-graph5"></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="panel panel-default1">
                            <div class="panel-body">
                                <div class="tab-pane" id="messages">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="demo-container">
                                                <span class="ser-load">Server Load</span>
                                                <div id="chart3" class="ser"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <div id="qn"></div>
            <!-- /.content -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/charts/jquery.flot.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/charts/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/charts/jquery.flot.pie.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/charts/jquery.flot.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/charts/jquery.flot.spline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/charts/jquery.flot.tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/toastr/js/toastr.min.js') }}" type="text/javascript"></script>
{{--    <script src="{{ asset('assets/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('assets/js/custom_js/dashboard.js') }}" type="text/javascript"></script>
    @stop