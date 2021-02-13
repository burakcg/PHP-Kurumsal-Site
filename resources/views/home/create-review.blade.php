@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')
@section('content')

    <!-- Games section -->
    <section class="games-single-page" style="padding-top: 200px!important;">
        <div class="container">
            <div class="game-single-preview" style="margin-bottom: 50px!important;">
                <img src="{{Storage::url($game->image)}}" alt="">
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
                    <h2 class="gs-title">{{$game->title}} - Review</h2>
                    <div class="game-author-info">
                        <h4>Write a review:</h4>
                        <!--comment-->
                        <form action="{{route('storeUserReview')}}" method="POST">
                            @csrf
                            <input type="hidden" name="content_id" value="{{$game->id}}" />
                            <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" />
                            <div class="form-group">
                                <input type="text" class="form-control" id="review-title" placeholder="Enter title" name="title">
                            </div>
                            <div class="form-group">
                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary mb-2" type="submit">Submit Review</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">

                </div>
            </div>
        </div>
    </section>
    <!-- Games end-->



@endsection
