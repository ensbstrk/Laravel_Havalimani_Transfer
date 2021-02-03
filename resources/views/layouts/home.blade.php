<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
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
