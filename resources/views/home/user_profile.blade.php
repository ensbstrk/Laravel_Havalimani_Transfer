@extends('layouts.home')


@section('title','User Profil')




@section('content')

<div class="container">
    <div class="row">
        <div id="aside" class="col-md-3">
            @include('home.usermenu')

        </div>
        <div id="aside" class="col-md-9">
            @include('profile.show')

        </div>
    </div>
</div>



@endsection
