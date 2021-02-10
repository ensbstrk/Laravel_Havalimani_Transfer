<html>
<head>
    <title>Image Gallery</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('assets/admin')}}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('assets/admin')}}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('assets/admin')}}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('assets/admin')}}/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('assets/admin')}}/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('assets/admin')}}/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body>
<div class="card-body">
    <div class="card">
        <div class="body">
            <h3 class="card-title">User Role</h3>
            @include('home.message')
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                <tr>
                    <th>Id</th> <td>{{ $data->id }}</td>
                </tr>
                <tr>
                    <th>Name</th> <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>Email</th> <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>Address</th> <td>{{ $data->address }}</td>
                </tr>
                <tr>
                    <th>Date</th> <td>{{ $data->created_at }}</td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        <table>
                            @foreach($data->roles as $row)
                                <tr>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        <a href="{{route('admin_user_role_delete', ['userid'=> $data->id, 'roleid'=> $row->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tbody>
                <td>
                    <form id="form_validation" action="{{ route('admin_user_role_add', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select name="roleid">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}"> {{$rs->name}} </option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary waves-effect" type="submit">Add Role</button>
                    </form>
                </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
