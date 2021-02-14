@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@include('home._header');
<link rel="stylesheet" href="{{asset('assets')}}/homeT/css/bootstrap.min.css"/>
<link rel="stylesheet" href="{{asset('assets')}}/homeT/css/font-awesome.min.css"/>
<link rel="stylesheet" href="{{asset('assets')}}/homeT/css/slicknav.min.css"/>
<link rel="stylesheet" href="{{asset('assets')}}/homeT/css/owl.carousel.min.css"/>
<link rel="stylesheet" href="{{asset('assets')}}/homeT/css/magnific-popup.css"/>
<link rel="stylesheet" href="{{asset('assets')}}/homeT/css/animate.css"/>

<!-- Main Stylesheets -->
<link rel="stylesheet" href="{{asset('assets')}}/homeT/css/style.css"/>

<!-- Footer section -->
<footer class="footer-section" style="height: 1500px!important; padding-top: 50px!important;">>
    <div class="container">

        <strong>HAKKIMIZDA :</strong> {!!$setting->aboutus!!}

        <ul class="main-menu footer-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="">Referances</a></li>
            <li><a href="">Contact</a></li>
        </ul>

        <div class="copyright"><a href="">{{$setting->company}}</a> 2020 @ All rights reserved</div>
    </div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{asset('assets')}}/homeT/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('assets')}}/homeT/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/homeT/js/jquery.slicknav.min.js"></script>
<script src="{{asset('assets')}}/homeT/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/homeT/js/jquery.sticky-sidebar.min.js"></script>
<script src="{{asset('assets')}}/homeT/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/homeT/js/main.js"></script>

