@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')
@section('content')

    <!-- Games section -->
    <section class="games-single-page" style="padding-top: 200px!important;">
        <div class="container">
            <div class="game-single-preview" style="margin-bottom: 50px!important;">
                <img src="{{Storage::url($review->content->image)}}" alt="">
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
                    <h2 class="gs-title">{{$review->content->title}} - {{$review->title}}</h2>
                    <div style="color: whitesmoke!important;">
                        {!! $review->text !!}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">

                </div>
            </div>
        </div>
    </section>
    <!-- Games end-->



@endsection
