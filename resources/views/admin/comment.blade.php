@extends('layouts.admin')

@section('title', 'Content')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Comment</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Content List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>

                            <th>id</th>
                            <th>Content_Id</th>
                            <th>User_Id</th>
                            <th>Text</th>
                            <th>Validated</th>


                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($datalist as $rs)

                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->content_id}}</td>
                                <td>{{$rs->user_id}}</td>
                                <td>{{$rs->text}}</td>
                                <td>{{$rs->validated}}</td>
                                <td><a class="fas fa-flag"  href="{{route('admin_comment_validate',['id'=>$rs->id])}}"> </a></td>
                                <td><a  href="{{route('admin_comment_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" >
                                        <img src="{{asset('assets/admin/images')}}/delete.png"height="30"> </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection
