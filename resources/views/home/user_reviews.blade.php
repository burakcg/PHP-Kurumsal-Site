@extends('layouts.home')

@section('title', 'Laravel Kurumsal Site')

@section('content')
    <section class="games-single-page" style="height: 750px!important; padding-top: 200px!important;">
        <div class="container">
            <div class="row">
                <table class="table table-dark" width="100%">
                    <thead>
                    <tr>

                        <th>Content</th>
                        <th>Reviews</th>
                        <th>Validated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (\Illuminate\Support\Facades\Auth::user()->reviews as $reviews)

                        <tr>
                            <td>{{$reviews->content->title}}</td>
                            <td>{{$reviews->text}}</td>
                            <td>{{$reviews->validated ? 'validated': 'not validated'}}</td>
                            <td><a  href="{{route('deleteUserReview', $reviews->id)}}" onclick="return confirm('Are you sure?')" >
                                    <img src="{{asset('assets/admin/images')}}/delete.png"height="30"> </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

