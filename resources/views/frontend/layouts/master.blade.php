<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->
<head> 
    <!-- ====== Meta ======= -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- ====== Page Title ======= -->
    <title>@yield('title','COVID-19')</title>
    @include('frontend.layouts.partials._styles')
    @yield('styles')
</head>

<body>
    <!-- body wraper -->
    <div class="body-wraper">
        <!-- ======= preloader part start ======= -->
        <div id="preloader">
            <div id="loader"></div>
        </div>
        <!-- ======= preloader part end ======= -->

        @include('frontend.layouts.partials._header')
        @yield('breadcrumb')
        @yield('content')
        
        @include('frontend.layouts.partials._footer')
        @include('frontend.layouts.partials._modal')

    </div>
    <!--./ body wraper -->

    @include('frontend.layouts.partials._scripts')
    @yield('scripts')
</body>
</html>