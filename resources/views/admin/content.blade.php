@extends('layouts.admin')

@section('title', 'Content')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Menu</h1>
        <a class="btn btn-primary btn-icon-split" href="{{route('admin_content_add')}}" >Add Content</a>

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
                                    <th>Title</th>
                                    <th>Keyword</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Menu_id</th>
                                    <th>Detail</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keyword}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>{{$rs->image}}</td>
                                    <td>{{$rs->menu_id}}</td>
                                    <td>{{$rs->detail}}</td>
                                    <td>{{$rs->type}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin_content_edit',['id'=>$rs->id])}}" class="btn btn-success btn-icon-split"> >Edit</a></td>
                                    <td><a href="{{route('admin_content_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" >Delete</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection







