<!DOCTYPE html>
<html lang="en">
    @include('include.head')
<body>
    <header>
        @include('include.header')
    </header>
    <article>
        @yield('content')
    </article>
    <footer>
        @include('include.footer')
    </footer>
</body>
@stack('child-script')
</html>