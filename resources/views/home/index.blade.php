@extends('layouts.home')


@section('title')
    {{$setting->title}}
@endsection
@section('description')
    {{$setting->description}}
@endsection
@section('keyworlds',$setting->keyworlds)

<a href="/login">Login</a>
<a href="/register">register</a>
<a href="/logout">Logout</a>


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
                        <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                        <p>price from: <strong> {{$rs->baseprice * 1.2}}</strong> Arac:{{$rs->title}}</p>

                        <div class="content">
                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>
                        </div>
                    </a>
                </article>
            </section>

            <p class="text-center"><a href="{{route('transfer',['id'=>$rs->id,'slug'=>$rs->slug])}}">View Offers &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


            @endforeach


        </div>
    </div>
@endsection
