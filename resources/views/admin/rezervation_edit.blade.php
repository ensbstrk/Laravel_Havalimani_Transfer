@extends('layouts.admin')

@section('title','Edit rezervation')

@section('content')



    <section class="content">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            rezervation Edit

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
                        <form role="form" action="{{route('admin_rezervation_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <label >Transfer_id</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="transfer_id" value="{{$data->transfer_id}}" class="form-control" >
                                </div>
                            </div>
                            <label >From location id</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="from_location_id" value="{{$data->from_location_id}}" class="form-control" >
                                </div>
                            </div>
                            <label >To location id</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="to_location_id" value="{{$data->to_location_id}}" class="form-control" >
                                </div>
                            </div>
                            <label >Price</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="price" value="{{$data->price}}" class="form-control" >
                                </div>
                            </div>
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

