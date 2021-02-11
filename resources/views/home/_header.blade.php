
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <div class="header-social d-flex justify-content-end">
            <p>Follow us:</p>
            @if($setting->facebook !=null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
            @if($setting->instagram !=null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
            @if($setting->pinterest !=null) <a href="{{$setting->pinterest}}" target="_blank"><i class="fa fa-pinterest"></i></a> @endif
            @if($setting->twitter !=null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
            @if($setting->dribbble !=null) <a href="{{$setting->dribbble}}" target="_blank"><i class="fa fa-dribbble"></i></a> @endif
            @if($setting->youtube !=null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a> @endif
        </div>
        <div class="header-bar-warp d-flex">
            <!-- site logo -->
            <a href="{{route('home')}}" class="site-logo">
                <img src="{{asset('assets')}}/homeT/img/logo.png" alt="">
            </a>
            <nav class="top-nav-area w-100">

                @auth
                    <div class="user-panel">
                        <ul class="main-menu primary-menu">
                       <li>
                        <a href="">{{ Auth::user()->name }}</a>
                           <ul class="sub-menu">
                               <li><a href="/login">Profile</a></li>
                               <li><a href="/login">Message</a></li>
                               <li><a href="/login">Comment</a></li>
                               <li><a href="{{route('logout')}}">Logout</a></li>
                           </ul>
                        </li>
                        </ul>
                    </div>
                @endauth

                @guest
                    <div class="user-panel">
                        <a href="/login">Login</a> / <a href="/register">Register</a>
                    </div>
                @endguest
                <!-- Menu -->
                @include('home._menu')
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->
