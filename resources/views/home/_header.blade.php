<br>
<div class="row">
    <div class="form-group">
        <div class="input-group">
            <form action="{{route('gettransfer')}}" method="post">
                @csrf
                @livewire('search')

                <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
            </form>
            @livewireScripts
        </div>
    </div>
</div>

<!DOCTYPE HTML>
<html>
<head>
    <title>Basturk Transfer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/')}}/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets/')}}/css/main.css" />
    <noscript><link rel="stylesheet" href="{{asset('transfer/')}}/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="{{route('home')}}" class="logo">
                <span class="fa fa-car"></span> <span class="title">Basturk Transfer</span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="{{route('home')}}" class="active">Home</a></li>
            <li><a href="/login" class="active">Login</a></li>
            <li><a href="/register" class="active">Register</a></li>
            <li><a href="/logout" class="active">Logout</a></li>
            <li><a href="{{route('aboutus')}}" class="active">Aboutus</a></li>
            <li><a href="{{route('references')}}" class="active">References</a></li>

            <li><a href="{{route('contact')}}" class="active">Contact</a></li>
            <li><a href="{{route('myprofile')}}" class="active">My Account</a></li>


           @include('home._category')


</div>
</body>
</html>
