@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-left-pic">
             <img src="{{asset('assets')}}/homeT/img/footer-left-pic.png" alt="">
        </div>
        <div class="footer-right-pic">
             <img src="{{asset('assets')}}/homeT/img/footer-right-pic.png" alt="">
        </div>
        <a href="#" class="footer-logo">
            <img src="{{asset('assets')}}/homeT/img/logo.png" alt="">
        </a>
        <ul class="main-menu footer-menu">
            <li><a href="">Home</a></li>
            <li><a href="{{route('aboutus')}}" target="_blank">About Us</a></li>
            <li><a href="">Referances</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="footer-social d-flex justify-content-center">
            @if($setting->facebook !=null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                @if($setting->instagram !=null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
                @if($setting->pinterest !=null) <a href="{{$setting->pinterest}}" target="_blank"><i class="fa fa-pinterest"></i></a> @endif
                @if($setting->twitter !=null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
                @if($setting->dribbble !=null) <a href="{{$setting->dribbble}}" target="_blank"><i class="fa fa-dribbble"></i></a> @endif
                @if($setting->youtube !=null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a> @endif
        </div>
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
