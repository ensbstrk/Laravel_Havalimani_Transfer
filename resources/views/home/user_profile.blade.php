@extends('layouts.home')


@section('title','User Profil')


<a href="/login">Login</a>
<a href="/register">register</a>
<a href="/logout">Logout</a>


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
