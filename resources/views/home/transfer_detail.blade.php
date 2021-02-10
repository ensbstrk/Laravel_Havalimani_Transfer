@extends('layouts.home')


@section('title')
    {{$data->title}}
@endsection
@section('description')
    {{$data->description}}
@endsection
@section('keyworlds',$data->keyworlds)



@section('content')
<div id="main">
    <div class="inner">

            <section class="tiles">
                <article class="style">
									<span class="image">
										<img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" alt="" />
									</span>
                    <a href="{{route('user_transfer_add')}}" class="scrolly">

                        <p>price:{{$data->baseprice}} Arac:{{$data->title}}</p>

                        <div class="content">

                        </div>
                    </a>
                </article>
            </section>


    </div>

@endsection
