@extends('layouts.home')

@section('title', 'user_content_edit')



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
    <section class="games-single-page" style="height: 1550px!important; padding-top: 200px!important;">

        <div class="container">
            <h3>İçerikler</h3>

            <div class="row">

                <form role="form" action="{{route('user_content_update',['id'=>$content->id])}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">


                        <select class="form-control select2" name="menu_id" style="width: 100%;">
                            <option value="0"></option>
                            @foreach($datalist as $data)
                                <option value="{{$data->id}}" @if ($data->id==$data->menu_id) selected="selected" @endif> {{$data->title}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{$content->title}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Keywords</label>
                        <input type="text" name="keywords" value="{{$content->keywords}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" value="{{$content->description}}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>image</label>
                        <input type="file" name="image" value="{{$content->image}}" class="form-control" >
                        @if($content->image)
                            <img src="{{Storage::url($content->image)}}" height="30" alt="">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>About Game</label>
                        <textarea id="summernote" name="detail" > {{$content->detail}}</textarea>
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
                            <option selected="selected">{{$content->type}}</option>
                            <option>Etkinlik</option>
                            <option>Haber</option>
                            <option>Duyuru</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Content</button>

                </form>

            </div>
        </div>
    </section>

@endsection

