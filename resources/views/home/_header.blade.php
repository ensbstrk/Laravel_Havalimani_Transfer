
<!DOCTYPE HTML>
<html>
<head>
    <title>PHPJabbers.com | Free Car Rental Website Template</title>
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
                <span class="fa fa-car"></span> <span class="title">CAR RENTAL WEBSITE</span>
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
            <li><a href="{{route('aboutus')}}" class="active">Aboutus</a></li>
            <li><a href="{{route('references')}}" class="active">References</a></li>
            <li><a href="{{route('fag')}}" class="active">Fag</a></li>
            <li><a href="{{route('contact')}}" class="active">Contact</a></li>


           @include('home._category')


</div>
</body>
</html>
