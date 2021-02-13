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
                        <th>Comment</th>
                        <th>Validated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (\Illuminate\Support\Facades\Auth::user()->comments as $comment)

                        <tr>
                            <td>{{$comment->content->title}}</td>
                            <td>{{$comment->text}}</td>
                            <td>{{$comment->validated ? 'validated': 'not validated'}}</td>
                            <td><a  href="{{route('userCommentsDelete', $comment->id)}}" onclick="return confirm('Are you sure?')" >
                                    <img src="{{asset('assets/admin/images')}}/delete.png"height="30"> </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

