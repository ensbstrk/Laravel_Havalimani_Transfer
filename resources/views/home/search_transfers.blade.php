@extends('layouts.home')


@section('title',$search."Transfer List")




@section('content')
<div id="main">
    <div class="inner">
@foreach($datalist as $rs)
        <section class="tiles">
            <article class="style1">
									<span class="image">
										<img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" />
									</span>
                <a href=>{{$search}} class="scrolly">

                    <p>price from: <strong> {{$rs->baseprice}}</strong>  {{$rs->title}}</p>

                </a>
            </article>

        </section>
        @endforeach
    </div>



@endsection
