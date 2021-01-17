@extends('layouts.admin')

@section('title','Add Transfer')

@section('content')



    <section class="content">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                               Transfer Add

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
                        <form action="{{route('admin_transfer_store')}}" method="post">
                            @csrf
                            <label >Parent</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="category_id" show-tick>
                                        @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{ $rs->title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <label >Title</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="title" class="form-control" >
                                </div>
                            </div>
                            <label >Keywords</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="keywords" class="form-control" >
                                </div>
                            </div>
                            <label >Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="description" class="form-control" >
                                </div>
                            </div>

                            <label >Baseprice</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="baseprice" value="0" class="form-control" >
                                </div>
                            </div>
                            <label >Kmprice</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="kmprice" value="0" class="form-control" >
                                </div>
                            </div>
                            <label >Capacity</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="capacity" value="0" class="form-control" >
                                </div>
                            </div>
                            <label >Detail</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="detail" class="form-control" >
                                </div>
                            </div>
                            <label >Fueltype</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="fueltype" class="form-control" >
                                </div>
                            </div>
                            <label >Slug</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="slug" class="form-control" >
                                </div>
                            </div>
                            <label >Status</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <select class="form-control"name="status" show-tick>
                                               <option selected="selected">False</option>
                                                <option>True</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Add Transfer</button>
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

