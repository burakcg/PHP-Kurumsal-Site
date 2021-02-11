@php
    $parentMenus = \App\Http\Controllers\HomeController::menulist()
@endphp
<!-- Menu -->
<ul class="main-menu primary-menu">
    <li><a href="{{route('home')}}">Home</a></li>

    @foreach($parentMenus as $rs)
        <li>
            <a href="{{route($rs->route)}}">{{$rs->title}}</a>
            @if(!$rs->children->isEmpty())
                <ul class="sub-menu">
                    @foreach($rs->children as $child)
                    <li><a href="{{route($child->route)}}">{{$child->title}}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
