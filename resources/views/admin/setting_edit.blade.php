@extends('layouts.admin')

@section('title','Edit Setting')

@section('content')



    <section class="content">
        <div class="row clearfix">
            <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">

                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active"><a href="#general" data-toggle="tab">General</a></li>
                            <li role="presentation"><a href="#smtp" data-toggle="tab">Smtp Email</a></li>
                            <li role="presentation"><a href="#social" data-toggle="tab">Social Media</a></li>
                            <li role="presentation"><a href="#aboutus" data-toggle="tab">About Us</a></li>
                            <li role="presentation"><a href="#contact" data-toggle="tab">Contact Page</a></li>
                            <li role="presentation"><a href="#references" data-toggle="tab">References</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="general">
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" >
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

                                <label >Company</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Phone</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Fax</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Status</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <select class="form-control"name="status" show-tick>
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option >False</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="smtp">


                                <label >Smtp Server</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Smtp Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Smtp Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Smtpport</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="social">

                                <label >Facebook</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Instagram</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                                    </div>
                                </div>
                                <label >Twitter</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="aboutus">
                                <label >About Us</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="aboutus" value="{{$data->aboutus}}" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="contact">
                                <label >Contact</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="contact" value="{{$data->contact}}" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="references">
                                <label >References</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="references" value="{{$data->references}}" class="form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect"> Update Setting</button>
                    </div>
                </div>
            </div>
                        </form>
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

