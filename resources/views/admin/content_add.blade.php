@extends('layouts.admin')

@section('title', 'Add Menu ')
@section('javascript')

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Content Add</h1>

        <form role="form" action="{{route('admin_content_store')}}" method="post" enctype="multipart/form-data">

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
                <input type="file" name="image" value=" " class="form-control" >
            </div>



            <div class="form-group">
                <label>user_id</label>
                <input type="number" name="user_id" value="1" class="form-control" >
            </div>

            <div class="form-group">
                <label>About Game</label>
                <textarea id="summernote" name="detail"  ></textarea>
                <script>
                    $('#summernote').summernote({
                        placeholder: 'Oyunun ayrıntılarını bu kısıma girebilirsiniz.',
                        tabsize: 2,
                        height: 120,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                    });
                </script>
                <p class="help-block">Game Detail</p>
            </div>

            <div class="form-group">
                <label>Type</label>
                <select class="form-control select2" id="type" name="type" style="width: 100%;">
                    <option selected="selected">Duyuru</option>
                    <option>Etkinlik</option>
                    <option>Haber</option>
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
