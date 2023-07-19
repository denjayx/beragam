<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Dashboard | @yield('title')</title>
</head>

<body>
    @include('partials.navbar')
    @yield('content')
</body>

</html>
