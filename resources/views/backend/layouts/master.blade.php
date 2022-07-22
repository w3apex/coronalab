<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','Hospital Management')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('backend.layouts.partials._styles')
    @yield('styles')
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        @include('backend.layouts.partials._sidebar')
        <!-- main content area start -->
        <div class="main-content">
            @include('backend.layouts.partials._header')
            @yield('admin-content')
        </div>
        <!-- main content area end -->
        @include('backend.layouts.partials._footer')
    </div>
    <!-- page container area end -->
    @include('backend.layouts.partials._offsets')
    @include('backend.layouts.partials._scripts')
    @yield('scripts')
</body>
</html>
