<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Beragam | @yield('title')</title>
</head>

<body class="bg-gradient-to-tr from-[#80B8D0] via-[#DFEEED] to-[#C5E3CA]">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>

</html>
