@extends('layouts.home')
@section('content')
<!-- Games section -->
<section class="games-section" style="padding-top: 200px!important;">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    @foreach($games as $game)
                    <div class="col-lg-4 col-md-6">
                        <div class="game-item">
                            <img src="{{Storage::url($game->image)}}" alt="#">
                            <h5>{{$game->title}}</h5>
                            <a href="{{route('gameDetail', $game->id)}}" class="read-more">Read More  <img src="{{asset('assets')}}/homeT/img/icons/double-arrow.png" alt="#"/></a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Games end-->
@endsection
