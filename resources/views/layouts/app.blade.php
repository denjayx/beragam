<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')
    <main class="container px-4 mx-auto">
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
