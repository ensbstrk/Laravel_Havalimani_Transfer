@extends('layouts.home')


@section('title','References -' . $setting->title )


@section('description')
    {{$setting->description}}
@endsection
@section('keyworlds',$setting->keyworlds)


@section('content')
<div id="main">
    <div class="inner">
        <h1>References</h1>

       {!! $setting->references !!}

    </div>
</div>

@endsection
