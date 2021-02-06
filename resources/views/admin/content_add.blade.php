@extends('layouts.admin')

@section('title', 'Add Menu ')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Content Add</h1>

        <form role="form" action="{{route('admin_content_store')}}" method="post">

            @csrf
            <div class="form-group">


                <select class="form-control select2" name="menu_id" style="width: 100%;">

                    @foreach($datalist as $rs)
                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value=" " class="form-control" >
            </div>

            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" value=" " class="form-control" >
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value=" " class="form-control" >
            </div>

            <div class="form-group">
                <label>image</label>
                <input type="text" name="image" value=" " class="form-control" >
            </div>



            <div class="form-group">
                <label>user_id</label>
                <input type="number" name="user_id" value="1" class="form-control" >
            </div>

            <div class="form-group">
                <label>detail</label>
                <input type="text" name="detail" value=" " class="form-control" >
            </div>

            <div class="form-group">
                <select class="form-control select2" name="type" style="width: 100%;">
                    <option value="0" selected="selected">menu</option>
                    <option value="0" selected="selected">haber</option>
                    <option value="0" selected="selected">duyuru</option>
                </select>
            </div>



            <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="status" style="width: 100%;">
                    <option selected="selected">False</option>
                    <option>True</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Add Content</button>

        </form>

@endsection
