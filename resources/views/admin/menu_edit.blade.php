@extends('layouts.admin')

@section('title', 'Edit Menu')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Menu Add</h1>
        <form role="form" action="{{route('admin_menu_update',['id'=>$data->id])}}" method="post">

            @csrf
            <div class="form-group">
                <label >Parent</label>

                <select class="form-control select2" name="parent_id" style="width: 100%;">
                    <option value="0">Main Category</option>
                    @foreach($datalist as $rs)
                        <option value="{{$rs->id}}" @if ($rs->id==$data->parent_id) selected="selected" @endif>
                            {{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{$data->title}}" class="form-control" >
            </div>

            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="{{$data->description}}" class="form-control" >
            </div>


            <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="status" style="width: 100%;">
                    <option selected="selected">{{$data->status}}</option>
                    <option >False</option>
                    <option>True</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Update Menu</button>

        </form>


@endsection
