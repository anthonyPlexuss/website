<!DOCTYPE html>
<html lang="en">
    <head>
        @include('header')
    </head>
    <body>
        @include('topnav')
        @yield('content')
        
        @include('footer')
    </body>
</html>