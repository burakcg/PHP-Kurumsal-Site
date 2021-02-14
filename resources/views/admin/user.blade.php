@extends('layouts.admin')

@section('title', 'User')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Adress</th>
                            <th>Roles</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datalist as $rs)
                            <tr class="gradeX">
                                <td>{{$rs->id}}</td>
                                <td>@if($rs->profile_photo_path)
                                        <img style="width:60px; height:60px;border:1px solid black;border-radius: 30px;" src="{{Storage::url($rs->profile_photo_path)}}">
                                    @endif
                                </td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->adress}}</td>
                                <td>
                                    <table>
                                        <tr>
                                            @foreach($rs->roles as $rl)
                                                <td >{{$rl->name}}</td>

                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: center">
                                                <a href="{{ route("admin_user_role_edit",['user_id'=>$rs->id]) }}"
                                                   onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=700,height=400,top=200px,left=300px')" >
                                                    Add</a> </td>
                                        </tr>
                                    </table>

                                </td>
                                <td style="width:200px;">
                                    <a href="{{ route("admin_user_edit",['id'=>$rs->id]) }}"
                                       onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=800,top=100px,left=100px')" class="btn btn-primary btn-mini">Edit</a>
                                    <a href="{{ route("admin_user_destroy",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger btn-mini" style="float: right;">Delete</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection

