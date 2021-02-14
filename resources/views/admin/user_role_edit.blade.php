<!-- Custom fonts for this template-->
<link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
@include("home.message")
<table class="table table-bordered data-table">
    <tr>
        <td>ID</td>
        <td>{{ $data->id }}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $data->email }}</td>
    </tr>
    <div class="control-group">
        <div class="controls">
            <table>
                <tr>
                    <td style="text-align: center" colspan="2">Roles</td>
                </tr>
                @foreach($data->roles as $rl)
                    <tr>
                        <td style="width:200px;">{{$rl->name}}</td>
                        <td><a href="{{ route("admin_user_role_delete",['user_id'=>$data->id,'role_id'=>$rl->id]) }}"
                               onclick="return confirm('Are You Sure To Delete')">Delete</a></td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
    <form action="{{ route('admin_user_role_add',['user_id'=>$data->id]) }}" method="post">
        @csrf
        <select  class="form-control"  name="role_id" id="">
            @foreach($datalist as $rl)
                @if(!$data->roles->pluck('name')->contains($rl->name))
                    <option value="{{$rl->id}}">{{$rl->name}}</option>

                @else
                    <option disabled value="{{$rl->id}}">{{$rl->name}}</option>
                @endif
            @endforeach
        </select>
        <button class="btn btn-success">Add Role</button>
    </form>
</table>
