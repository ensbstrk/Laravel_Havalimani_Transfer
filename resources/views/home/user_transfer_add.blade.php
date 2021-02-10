@extends('layouts.home')


@section('title','Add Transfer')





@section('content')

    <div class="container">
        <div class="row">
            <div id="aside" class="col-md-2">
                @include('home.usermenu')

            </div>
            <div class="card col-md-10">
                <div class="card-header">

                    <a class="btn btn-primary m-t-15 waves-effect" href="{{route('user_transfer_add')}}">Add Transfer</a>


                </div>


                <div class="table-responsive">
                    <form action="{{route('user_transfer_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label >Category</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control" name="category_id" show-tick>
                                    @foreach($locations as $rs)
                                        <option value="{{$rs->id}}">{{App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <label >Nereden</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control" name="from_location_id" show-tick>
                                    @foreach($locations as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <label >Nereye</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control" name="to_location_id" show-tick>
                                    @foreach($locations as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <label >Uçak Varış Zamanı</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="booking_time" class="form-control" >
                            </div>
                        </div>

                        <label >Araç Rezervasyon Zamanı</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="return_time" class="form-control" >
                            </div>
                        </div>
                        <label >Price</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="price" value="0" class="form-control" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Add Transfer</button>
                    </form>
                </div>
            </div>

        </div>
    </div>



@endsection
<script>
    import İnput from "@/Jetstream/Input";
    export default {
        components: {İnput}
    }
</script>
