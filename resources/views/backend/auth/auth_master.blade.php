<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('auth_title', 'Authentication - Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    @include('backend.layouts.partials._styles')
    @yield('styles')
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
   
    @yield('auth-content')

    @include('backend.layouts.partials._scripts')
    @yield('scripts')
</body>

</html>