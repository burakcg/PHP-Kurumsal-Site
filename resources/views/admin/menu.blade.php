@extends('layouts.admin')

@section('title', 'Menu')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Menu</h1>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach ($datalist as $rs)
                                    <p> </p>

                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->parent_id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/DataTables/datatables.css">

        <script type="text/javascript" charset="utf8" src="{{asset('assets')}}/admin/DataTables/datatables.js"></script>
    <script>

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>


@endsection







