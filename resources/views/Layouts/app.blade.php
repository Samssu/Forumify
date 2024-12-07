<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body>
   {{-- Navbar --}}
   @include('partials.navbar')
   
    @yield('body')

    @include('partials.footer')

    @yield('beefore-script')

    @include('partials.script')
    
    @yield('after-script')

</body>

</html>
