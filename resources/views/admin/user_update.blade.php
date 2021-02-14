<!-- Custom fonts for this template-->
<link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
@include("home.message")
<h3 style="margin: 10px;text-align: center;">User Detail</h3>
<form style="margin:20px;" enctype="multipart/form-data" action="{{ route('admin_user_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
    @csrf
    <div class="control-group">
        <label class="control-label">Name</label>
        <div class="controls">
            <input value="{{$data->name}}" required type="text" name="name" class="span6" placeholder="Name" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Email</label>
        <div class="controls">
            <input required value="{{$data->email}}" type="text" name="email" class="span6" placeholder="Email" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Phone</label>
        <div class="controls">
            <input value="{{$data->phone}}" type="text" name="phone" class="span6" placeholder="Phone"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Adress</label>
        <div class="controls">

            <input value="{{$data->adress}}" type="text" name="adress" class="span6" placeholder="Adress"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Image</label>
        <div class="controls">
            <input  name="profile_photo_path" class="span6" type="file" />
        </div>
        <div class="controls">
            @if($data->profile_photo_path)
                <img width="150px" style="margin:10px;" src="{{ Storage::url($data->profile_photo_path) }}" alt="">
            @endif
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"><b>Roles</b></label>
        <div class="controls">
            <table>
                @foreach($data->roles as $rl)
                    <tr>
                        <td>{{$rl->name}}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
    <br>
    <div class="form-actions">
        <button style="margin-bottom:10px;" type="submit" class="btn btn-success">User Update</button>
    </div>
</form>

