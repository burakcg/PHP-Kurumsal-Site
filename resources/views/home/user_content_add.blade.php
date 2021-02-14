@extends('layouts.home')

@section('title', 'Laravel Kurumsal Site')

@section('content')
    <section class="games-single-page" style="height: 1550px!important; padding-top: 200px!important;">

        <div class="container">
            <h3>İçerikler</h3>

            <div class="row">

                <form role="form" action="{{route('user_content_store')}}" method="post" enctype="multipart/form-data">

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


                    <button type="submit" class="btn btn-primary">Add Content</button>

                </form>

            </div>
        </div>
    </section>

@endsection

