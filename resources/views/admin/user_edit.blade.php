@extends('layouts.admin')

@section('title','News Edit List')

@section('content')

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h2>Edit</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="body">
                    <form id="form_validation" action="{{ route('admin_user_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Name" value="{{$data->name}}" required="" aria-required="true">
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Email" value="{{$data->email}}" required="" aria-required="true">
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Address" value="{{$data->address}}" required="" aria-required="true">
                                <label>Address</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" class="form-control" name="Image" >
                                <label>Image</label>
                                @if($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="100" alt="">
                                @endif
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <!-- Jquery Core Js -->
    <script>
        import İnput from "@/Jetstream/Input";
        export default {
            components: {İnput}
        }
    </script>

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

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection
