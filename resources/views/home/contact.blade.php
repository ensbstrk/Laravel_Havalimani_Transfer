@extends('layouts.home')


@section('title','Contact -' . $setting->title )


@section('description')
    {{$setting->description}}
@endsection
@section('keyworlds',$setting->keyworlds)

<a href="/login">Login</a>
<a href="/register">register</a>
<a href="/logout">Logout</a>


@section('content')
<div id="main">
    <div class="inner">
        <h1>Contact</h1>
        <div class="row">
            <div >

                {!! $setting->contact !!}
            </div>

        </div>

    </div>
</div>

@endsection
