<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   @include('include.head')
   @yield('title')
</head>

<body>

    <!-- Preloader Start -->
    {{-- @include('include.preloader') --}}
    <!-- Preloader Start -->

    {{-- HEADER HERE --}}
    @include('include.header')
    <main>
        @yield('content')
    </main>

    @include('include.footer')

    <!-- JS here -->
    @include('include.js')
    @yield('script')

</body>

</html>
