@extends('layouts.home')


@section('title','About Us -' . $setting->title )


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
        <h1>About Us</h1>

       {!! $setting->aboutus !!}

    </div>
</div>

@endsection
