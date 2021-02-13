@php
$sliderContent = \App\Http\Controllers\HomeController::sliderContents();
@endphp
<!-- Hero section -->
<section class="hero-section overflow-hidden">
    <div class="hero-slider owl-carousel">
        @foreach($sliderContent as $content)
        <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{Storage::url($content->image)}}">
            <div class="container">
                <h2>{{$content->title}}</h2>
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- Hero section end-->
