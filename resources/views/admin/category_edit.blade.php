@extends('layouts.admin')

@section('title','Edit Category')

@section('content')



    <section class="content">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                               Category Edit

                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form role="form"action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <label >Parent</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="parent_id" show-tick>


                                        <option value="0">Ana Category</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >{{App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <label >Title</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                                </div>
                            </div>
                            <label >Keywords</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                </div>
                            </div>
                            <label >Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                </div>
                            </div>
                            <label >Slug</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control" >
                                </div>
                            </div>
                            <label >Status</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <select class="form-control"name="status" show-tick>
                                               <option selected="selected">{{$data->status}}</option>
                                                <option>False</option>
                                                <option>True</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Edit Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </section>



@endsection


@section('footer')
    <!-- Jquery Core Js -->
    <script src="{{asset('assets/admin')}}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('assets/admin')}}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/admin')}}/js/admin.js"></script>
    <script src="{{asset('assets/admin')}}/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
@endsection

