@extends('layouts.home')


@section('title','My Transfer')




@section('content')

    <div class="container">
        <div class="row">
            <div id="aside" class="col-md-2">
                @include('home.usermenu')

            </div>
            <div class="card col-md-10">
                <div class="card-header">

                    <a class="btn btn-primary m-t-15 waves-effect" href="{{route('user_transfer_add')}}">Add Transfer</a>
                   @include('home.message')

            </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>Transfer ID</th>
                            <th>Kimin</th>
                            <th>From_locaton_id</th>
                            <th>To_locaton_id</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{\Illuminate\Support\Facades\Auth::user()->name}}</td>
                                <td>{{ $rs->from_location_id}}</td>
                                <td>{{ $rs->to_location_id}}</td>
                                <td>{{ $rs->price}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('rezervation_edit',['id'=>$rs->id])}}">Edit</a></td>
                                <td><a href="{{route('rezervation_delete',['id'=>$rs->id])}}"onclick="return confirm('Delete Emin Misin?')" >Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>



@endsection
