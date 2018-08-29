<html>
@include('partials.head')
@yield('head')

<body style="background-color: #e9ebee;">
@include('partials.nav')
@yield('navbar')

    @yield('content')



@include('partials.footer')
@yield('footer')

</body>


</html>