@include('partials._head')
<body id="app-layout">
    @include('partials._nav')
    @yield('content')
    @include('partials._footer')
    @include('partials._scripts')
</body>
</html>
