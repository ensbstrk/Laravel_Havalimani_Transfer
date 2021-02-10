@extends('layouts.home')


@section('title','Edit Transfer')




@section('content')

    <div class="container">
        <div class="row">
            <div id="aside" class="col-md-2">
                @include('home.usermenu')

            </div>
            <div class="card col-md-10">
                <div class="card-header">

                    <a class="btn btn-primary m-t-15 waves-effect" href="{{route('user_transfer_add')}}">Edit Transfer</a>


                </div>

                <div class="table-responsive">
                    <form action="{{route('user_rezervation_update',['id'=>$rezervation->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label >From_locaton_id</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="from_location_id" value="{{$rezervation->from_location_id}}" class="form-control" >
                            </div>
                        </div>

                        <label >To_locaton_id</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="to_location_id" value="{{$rezervation->to_location_id}}" class="form-control" >
                            </div>
                        </div>



                        <br>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect"> Update Transfer</button>
                    </form>
                </div>
            </div>

        </div>
    </div>



@endsection
