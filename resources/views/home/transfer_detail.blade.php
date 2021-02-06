@extends('layouts.home')


@section('title')
    {{$data->title}}
@endsection
@section('description')
    {{$data->description}}
@endsection
@section('keyworlds',$data->keyworlds)

<a href="/login">Login</a>
<a href="/register">register</a>
<a href="/logout">Logout</a>


@section('content')
<div id="main">
    <div class="inner">
        <section class="tiles">
            <article class="style1">
									<span class="image">
										<img src="{{asset('assets/')}}/images/product-1-720x480.jpg" alt="" />
									</span>
                <a href="#footer" class="scrolly">
                    <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                    <p>price from: <strong> $ 140.00</strong> per weekend</p>


                </a>
            </article>
        </section>
    </div>
</div>
@endsection
