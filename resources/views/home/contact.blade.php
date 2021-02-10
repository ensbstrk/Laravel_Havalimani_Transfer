@extends('layouts.home')


@section('title','Contact -' . $setting->title )


@section('description')
    {{$setting->description}}
@endsection
@section('keyworlds',$setting->keyworlds)



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
