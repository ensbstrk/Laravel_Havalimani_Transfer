@extends('layouts.home')


@section('title',$search."Transfer List")




<a href="/login">Login</a>
<a href="/register">register</a>
<a href="/logout">Logout</a>


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
                    <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                    <p>price from: <strong> {{$rs->baseprice}}</strong>  {{$rs->title}}</p>

                </a>
            </article>

        </section>
        @endforeach
    </div>



@endsection
