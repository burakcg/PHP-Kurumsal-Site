@php
$allContent = \App\Http\Controllers\HomeController::allContent();
@endphp
<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                @foreach($allContent as $_content)
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="{{Storage::url($_content->image)}}" alt="">
                    </div>
                    <div class="blog-text text-box text-white">
                        <h3>{{$_content->title}}</h3>
                        <p>{{$_content->description}}</p>
                        <a href="{{route('gameDetail', $_content->id)}}" class="read-more">Read More   <img src="{{asset('assets')}}/homeT/img/icons/double-arrow.png" alt="#"/></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Blog section end -->
