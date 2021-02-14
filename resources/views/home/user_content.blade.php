@extends('layouts.home')

@section('title', 'Laravel Kurumsal Site')

@section('content')
    <section class="games-single-page" style="height: 750px!important; padding-top: 200px!important;">

        <div class="container">
            <h3>İçerikler</h3>
            <a class="btn-success " href="{{route("user_content_create")}}" style="margin:5px;"> İçerik Ekle</a>

            <div class="row">

                <table class="table table-dark" width="100%">
                    <thead>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Resim</th>
                    <th>Durum</th>
                    <th>İşlem</th>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)
                        <tr class="gradeX">
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td align="center" style="text-align: center;"><img src="{{Storage::url($rs->image) }}" style="width: 120px;height: 80px;"></td>
                            <td>{{$rs->status}}</td>
                            <td style="width:100px;">
                                <a href="{{ route("user_content_edit",['id'=>$rs->id]) }}" ><i class="fa fa-edit" style="color:midnightblue;"></i></a>
                                <a href="{{ route("user_content_destroy",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete')"  style="float: right;">
                                    <i class="fa fa-window-close" style="color:darkred;"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

