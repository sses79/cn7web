@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
    Add New Timeline Item
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet" media="screen"
          type="text/css"/>
{{--    <link href="{{ asset('assets/vendors/select2/select2.min.css') }}" type="text/css"/>--}}
{{--    <link href="{{ asset('assets/vendors/tags/dist/bootstrap-tagsinput.css') }}" rel="stylesheet"/>--}}
{{--    <link href="{{ asset('assets/vendors/iCheck/skins/square/blue.css') }}" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ asset('assets/css/custom_css/blog.css') }}" rel="stylesheet" type="text/css"/>

@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>Add new timeline item</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-fw fa-home"></i>
                    Home
                </a>
            </li>
            <li class="active"> Add new timeline item</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content paddingleft_right15">
        <!--main content-->
        <div class="row">
            <div class="the-box no-border">
                {!! Form::open(array('url' => URL::to('backend/news/create'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            {!! Form::text('title', null, array('class' => 'form-control input-lg', 'required' => 'required', 'placeholder'=>'Timeline Item title here...'))!!}
                        </div>
                        <div class="form-group">
                            <div class='box-body pad'>
                                {!! Form::textarea('content', null, array('class' => 'textarea form-control', 'rows'=>'5', 'placeholder'=>'Place some text here', 'style'=>'style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success">Publish</button>
                                <a href="{!! URL::to('backend/news') !!}" class="btn btn-danger">Discard</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-8 -->
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!--main content ends-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/summernote/summernote.min.js') }}" type="text/javascript"></script>
{{--    <script src="{{ asset('assets/vendors/select2/select2.js') }}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('assets/vendors/iCheck/icheck.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('assets/vendors/tags/dist/bootstrap-tagsinput.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('assets/js/custom_js/add_news.js') }}" type="text/javascript"></script>
@stop