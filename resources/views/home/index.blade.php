@extends('layouts.home')


@section('title')
    {{$setting->title}}
@endsection
@section('description')
    {{$setting->description}}
@endsection
@section('keyworlds',$setting->keyworlds)

@section('content')

    <div id="main">
       @include('home._slider')

        <div class="inner">

            <br>

            <h2 class="h2">Cheap Car</h2>

            <!-- Offers -->
            @foreach($daily as $rs)
            <section class="tiles">
                <article class="style">
									<span class="image">
										<img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" />
									</span>
                    <a href="{{route('transfer',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="scrolly">

                        <p>price:{{$rs->baseprice}} Arac:{{$rs->title}}</p>

                        <div class="content">

                        </div>
                    </a>
                </article>
            </section>

            <p class="text-center"><a href="{{route('transfer',['id'=>$rs->id,'slug'=>$rs->slug])}}">View Offers &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


            @endforeach


        </div>
    </div>
@endsection
