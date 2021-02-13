@extends('layouts.home')

@section('title', 'Laravel Kurumsal Site')

@section('content')
    <!-- Hero section -->
    <section class="hero-section overflow-hidden">
        <div class="hero-slider owl-carousel">
            <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('assets/homeT/img/slider-bg-1.jpg')}}">
                <div class="container">
                   <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-3">
                             @include('home.user_menu')
                        </div>
                   </div>
                </div>
            </div>
            <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('assets/homeT/img/slider-bg-2.jpg')}}">
                <div class="container">
                @include('profile.showx')
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end-->

@endsection

