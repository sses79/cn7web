<!DOCTYPE html>
<html>
<head>
    <title>Login | Backend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="{{ asset('assets/css/custom_css/login.css') }}" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel-header">
                <h2 class="text-center">
                    Backend Login
                </h2>
            </div>
            <div class="panel-body social col-sm-offset-3">

                <div class="col-xs-4 col-sm-3">
                    <a href="#" class="btn btn-lg btn-block btn-facebook"> <i class="fa fa-facebook-square fa-lg"></i>
                        <span class="hidden-sm hidden-xs">Facebook</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3">
                    <a href="#" class="btn btn-lg btn-block btn-twitter"> <i class="fa fa-twitter-square fa-lg"></i>
                        <span class="hidden-sm hidden-xs">Twitter</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3">
                    <a href="#" class="btn btn-lg btn-block btn-google">
                        <i class="fa fa-google-plus-square fa-lg"></i>
                        <span class="hidden-sm hidden-xs">Google+</span>
                    </a>
                </div>
                <div class="clearfix">

                    <div class="col-xs-12 col-sm-9">
                        <hr class="omb_hrOr">
                        <span class="omb_spanOr">or</span>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-sm-6 col-sm-offset-2">
                        <!-- Notifications -->
                        @include('notifications')

                        <form action="{{ route('backend-login') }}" class="omb_loginForm"  autocomplete="off" method="POST">
                            {!! Form::token() !!}
                            <div class="input-group {{ $errors->first('email', 'has-error') }}">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="email address" value="{{ old('email') }}"></div>
                                <span class="help-block">{{ $errors->first('email', ':message') }}</span>

                            <div class="input-group {{ $errors->first('password', 'has-error') }}">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="password"></div>
                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                            <div class="checkbox">
                                <label>
                                    {{--<input type="checkbox">--}}
                                    email: admin@admin.com | pw: admin
                                </label>
                            </div>
                            <input type="submit" class="btn btn-md btn-primary btn-block" value="Login" />
                            <a href="{{ route('home') }}" class="btn btn-md btn-block btn-danger">Discard</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>