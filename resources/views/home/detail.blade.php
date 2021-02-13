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
                    <h2 class="gs-title">{{$game->title}}</h2>
                    <h4>Description</h4>
                    <p>{{$game->description}}</p>
                    <h4>Detail</h4>
                    {!! $game->detail !!}
                    <div class="geme-social-share pt-5 d-flex">
                        <p>Share:</p>
                        @if($setting->facebook !=null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                        @if($setting->instagram !=null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
                        @if($setting->pinterest !=null) <a href="{{$setting->pinterest}}" target="_blank"><i class="fa fa-pinterest"></i></a> @endif
                        @if($setting->twitter !=null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
                        @if($setting->dribbble !=null) <a href="{{$setting->dribbble}}" target="_blank"><i class="fa fa-dribbble"></i></a> @endif
                        @if($setting->youtube !=null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a> @endif
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
                    <div id="stickySidebar">
                        <div class="widget-item">
                            <div class="rating-widget">
                                <h4 class="widget-title">Ratings</h4>
                                <ul>
                                    <li>Price<span>3.5/5</span></li>
                                    <li>Graphics<span>4.5/5</span></li>
                                    <li>Levels<span>3.5/5</span></li>
                                    <li>Levels<span>4.5/5</span></li>
                                    <li>Dificulty<span>4.5/5</span></li>
                                </ul>
                                <div class="rating">
                                    <h5><i>Rating</i><span>4.5</span> / 5</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Games end-->

    <!-- Games Author-->
    <section class="game-author-section">
        <div class="container">
            <div class="row">
                @foreach($game->comments()->where('validated', true)->get() as $comment)
                <div class="col-md-12" style="margin-top: 10px">
                    <div class="game-author-info">
                        <h4>Comment by: {{$comment->user->name}}</h4>
                        <p>{{$comment->text}}</p>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12" style="margin-top: 30px">
                    <div class="game-author-info">
                        <h4>Write a comment:</h4>
                        <!--comment-->
                        <form action="{{route('addComment')}}" method="POST">
                            @csrf
                            <input type="hidden" name="content_id" value="{{$game->id}}" />
                            <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" />
                            <div class="form-group">
                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary mb-2" type="submit">Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>



@endsection
