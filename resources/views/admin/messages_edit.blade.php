<section class="content">
    <div class="card-header">
        <h2>Messages</h2>
@include('home.message')
    </div>
                    <div class="body">
                        <form action="{{route('admin_message_update',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                         @csrf
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                                <tr>
                                    <th>Id</th>  <td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>   <td>{{ $data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th><td>{{ $data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th><td>{{ $data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th><td>{{ $data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th><td>{{ $data->message}}</td>
                                </tr>
                                <tr>
                                    <th>Admin Note</th>
                                    <td>
                                        <textarea type="text" name="note" value="{{ $data->note}}" class="form-control" ></textarea>
                                    </td>
                                <tr>
                                    <td></td> <td><button type="submit" class="btn btn-primary m-t-15 waves-effect"> Update Message</button></td>
                                </tr>
                            </table>


                        </form>
                    </div>
</section>








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

                        <script>
                            import İnput from "@/Jetstream/Input";
                            export default {
                                components: {İnput}
                            }
                        </script>
