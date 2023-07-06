<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Beragam | @yield('title')</title>
</head>

<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>

</html>
