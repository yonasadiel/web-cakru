<!doctype html>
<html>
<head>
@include('includes.head')
@yield('style')
</head>

<body>

<header class="header">
@include('includes.header')
</header>

<main>
@yield('content')
</main>

<footer class="footer">
@include('includes.footer')
</footer>

@yield('script')

</body>
</html>