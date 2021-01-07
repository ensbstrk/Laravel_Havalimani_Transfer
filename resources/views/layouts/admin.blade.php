<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/')}}/admin/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/')}}/admin/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/')}}/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('assets/')}}/admin/assets/css/argon.css?v=1.2.0" type="text/css">

    @yield('css')
    @yield('javascript')
</head>

<body>
@include('admin._sidebar')
<div class="main-content" id="panel">
@include('admin._header')
@yield('content')
</div>
@include('admin._footer')

@yield('footer')

</body>
</html>

