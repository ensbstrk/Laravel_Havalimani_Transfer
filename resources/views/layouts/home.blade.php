<html>
<head>
    <title>Layout title - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.<br>
    xxxxx<br>
    yyyyy<br>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
