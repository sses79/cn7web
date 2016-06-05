<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            |  Backend
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom_css/cn-web.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/custom_css/metisMenu.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/custom_css/panel.css') }}" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css-->
@yield('header_styles')
<!--end of page level css-->
</head>
<body class="skin-chandra">
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="{{ route('home')}}" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo"/>
        </a>

        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                        class="fa fa-fw fa-hand-o-left"></i>
            </a>
        </div>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                {{--User Account --}}
                @include('backend.layouts._user_menu')

            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">

                {{-- user bio --}}
                @include('backend.layouts._left_bio')

                <ul class="navigation">
                    <li {{ (Request::is('backend') ? 'class="active"' : '') }}>
                        <a href="{{ route('dashboard') }}">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Dashboard</span>
                        </a>
                    </li>
                    <li {{ (Request::is('backend/users') ? 'class=active' : '') }}>
                        <a href="{{ URL::to('backend/users') }}">
                            <i class="menu-icon fa fa-fw fa-users"></i>
                            <span class="mm-text ">Users</span>
                        </a>
                    </li>
                    <li class="menu-dropdown  {!! (( Request::is('backend/tItem') ||  Request::is('backend/tItem/create')) || Request::is('backend/tItem/*')  ? 'active' : '') !!}">
                        <a href="#">
                            <i class="menu-icon fa fa-fw fa-newspaper-o"></i>
                            <span class="title">Timeline items</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is('backend/news') ? 'class="active"' : '') !!}>
                                <a href="{{ URL::to('backend/news') }}">
                                    <i class="fa fa-fw fa-th-list"></i>
                                    Timeline Item List
                                </a>
                            </li>
                            <li {!! (Request::is('backend/news/create') ? 'class="active"' : '') !!}>
                                <a href="{{ URL::to('backend/news/create') }}">
                                    <i class="fa fa-fw fa-pencil-square-o"></i>
                                    Add New Timeline Item
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side right-padding">

        <!-- Notifications -->
    @include('notifications')

    <!-- Content -->
    @yield('content')
    <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
@if (Request::is('backend/draggable_portlets'))
    <script src="{{ asset('assets/js/custom_js/jquery.ui.min.js') }}" type="text/javascript"></script>
@endif
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/custom_js/metisMenu.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/custom_js/app.js') }}" type="text/javascript"></script>


<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>