<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="BCG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets')}}/homeT/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/homeT/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/homeT/css/slicknav.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/homeT/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/homeT/css/magnific-popup.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/homeT/css/animate.css"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets')}}/homeT/css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    @yield('headerjs')

</head>
<body>

@include('home._header')


@section('content')

@show

@include('home._footer')
@yield('footerjs')
</body>
</html>
