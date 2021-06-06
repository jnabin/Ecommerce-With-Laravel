<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.adminPartials.head')
</head>
<body>
    @include('layout.adminPartials.nav')

    @yield('content')

    @include('layout.adminPartials.footer')
    @include('layout.adminPartials.footer-scripts')
</body>
</html>