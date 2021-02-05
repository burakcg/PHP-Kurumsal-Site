@extends('layouts.admin')

@section('title', 'Laravel Kurumsal Site')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Menu Add</h1>
        Add Category Form
        <form role="form" action="{{route('admin_category_create')}}" method="post">

            @csrf
            <div class="form-group">
                <label >Parent</label>

                <select class="form-control select2" name="parent_id" style="width: 100%;">
                    <option value="0" selected="selected">Main Category</option>

                    @foreach($datalist as $rs)
                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" >
            </div>

            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" class="form-control" >
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" >
            </div>



            <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="status" style="width: 100%;">
                    <option selected="selected">False</option>
                    <option>True</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>

        </form>

@endsection
