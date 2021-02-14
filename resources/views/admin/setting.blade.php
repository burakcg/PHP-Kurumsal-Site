@extends('layouts.admin')

@section('title', 'Setting')

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
    <!-- Begin Page Setting -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Setting</h1>
        <!-- Form Start -->

            <form role="form" action="{{route('admin_setting_update')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#genel" data-toggle="tab">Genel</a>
                        </li>
                        <li class=""><a href="#smtpayari" data-toggle="tab">Smtp Ayarları</a>
                        </li>
                        <li class=""><a href="#sosyalmedya" data-toggle="tab">Sosyal Medya</a>
                        </li>
                        <li class=""><a href="#hakkimizda" data-toggle="tab">Hakkımızda</a>
                        </li>
                        <li class=""><a href="#iletisim" data-toggle="tab">İletişim Sayfası</a>
                        </li>
                        <li class=""><a href="#referanslar" data-toggle="tab">Referanslar</a>
                        </li>
                    </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="genel">
                            <h5>Genel Ayarlar</h5>
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" >
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

                        </div>
                        <div class="tab-pane fade" id="smtpayari">
                            <h5></h5>
                            <div class="form-group">
                                <label>Smtpserve</label>
                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                            </div>


                            <div class="form-group">
                                <label>Smtpemail</label>
                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Smtppassword</label>
                                <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Smtpport</label>
                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sosyalmedya">
                            <h5>Sosyal Medya</h5>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>YouTube</label>
                                <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" >
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hakkimizda">
                            <h5>Hakkımızda</h5>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>AboutUs</label>
                                    <textarea id="summernote" name="aboutus" value="{{$data->aboutus}}" class="form-control" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea id="summernote2" name="contact" value="{{$data->contact}}" class="form-control" ></textarea>
                                </div>

                                <script>
                                    $('#summernote').summernote({
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
                                    $('#summernote2').summernote({
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
                            </div>
                        </div>
                        <div class="tab-pane fade active in" id="iletisim">
                            <h5>İletişim Sayfası</h5>
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Adress</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="phone" value="{{$data->phone}}"  class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                            </div>
                        </div>
                        <div class="tab-pane fade active in" id="referanslar">
                            <h5>Referanslar</h5>
                            <div class="form-group">
                                <label>Referances</label>
                                <textarea id="summernote3" name="references" value="{{$data->references}}" class="form-control" ></textarea>
                            </div>
                            <script>     $('#summernote3').summernote({
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
                        </div>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                        </div>
                </div>
            </form>
        </div>

@endsection
