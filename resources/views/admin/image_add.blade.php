<html>
<head>
    <title>Image Gallery</title>
</head>
<body>

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Content {{$data->title}}</h1>

        <form role="form" action="{{route('admin_image_store',['content_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value=" " class="form-control" >
            </div>


            <div class="form-group">
                <label>image</label>
                <input type="file" name="image" value=" " class="form-control" >
            </div>

            <button type="submit" class="btn btn-primary">Add Image</button>

        </form>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Image List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($images as $rs)
            <tr>
                <td>{{$rs->id}}</td>
                <td>{{$rs->title}}</td>

                <td>
                    @if($rs->image)
                        <img src="{{Storage::url($rs->image)}}" height="100" alt="">
                    @endif
                </td>
                <td><a  href="{{route('admin_image_delete',['id'=>$rs->id,'content_id'=>$data->id])}}" onclick="return confirm('Are you sure?')" >
                        <img src="{{asset('assets/admin/images')}}/delete.png"height="30"> </a></td>
        @endforeach
        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
