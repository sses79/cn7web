<!DOCTYPE html>
<html>
<head>
    <title>Welcome | CN7WEB</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        .menu {
            font-size: 20px;
        }

        ul#mini-tabs {
            list-style: none;
            margin: 0;
            padding: 10px 0;
            border-bottom: 1px solid #CCC;
            /*font-weight: bold;*/
            text-align: center;
            white-space: nowrap
        }

        ul#mini-tabs li {
            display: inline;
            margin: 0 10px;
        }

        ul#mini-tabs a {
            text-decoration: none;
            padding: 0 0 3px;
            border-bottom: 4px solid #FFF;
            color: #999
        }

        ul#mini-tabs a#current {
            border-color: #F60;
            color: #06F
        }

        ul#mini-tabs a:hover {
            border-color: #F60;
            color: #666
        }

    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">404, the page you are looking for could not be found</div>
        <div class="menu">
            <ul id="mini-tabs">
                <li><a id="current" href="#">404</a></li>
                <li><a href="{{ URL::to('feature') }}">feature</a></li>
                <li><a href="{{ URL::to('portfolio') }}">portfolio</a></li>
                <li><a href="{{ URL::to('timeline') }}">timeline</a></li>
                <li><a href="{{ route('backend-login') }}">admin</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
