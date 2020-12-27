<!DOCTYPE HTML>
<html>
<head>
    <title>PHPJabbers.com | Free Car Rental Website Template</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="enes">
    <<link rel="stylesheet" href="{{asset('assets/')}}/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets/')}}/css/main.css" />
    <noscript><link rel="stylesheet" href="{{asset('assets/')}}/css/noscript.css" /></noscript>

    @yield('css')
    @yield('headerjs')


</head>
<body class="is-preload">
@include('home._header')
<!-- Wrapper -->
<div id="wrapper">
</div>

@section('content')
    içerik alanı
    @show

@include('home._footer')
@yield('footerjs')

</body>

</html>
