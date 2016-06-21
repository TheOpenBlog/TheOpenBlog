@include('partials._head')
<body id="app-layout">
    @include('partials._nav')
    @yield('content')
    @include('partials._scripts')
    <footer class="footer">
          <div class="container">
              <center>
                  <p class="text-muted">Site best viewed in:
                      <i class="fa fa-safari" id="browsers" aria-hidden="true"></i>
                      <i class="fa fa-chrome" id="browsers" aria-hidden="true"></i>
                      <i class="fa fa-firefox" id="browsers" aria-hidden="true"></i>
                      <i class="fa fa-edge" id="browsers" aria-hidden="true"></i>
                  </p>
                  <center>
          </div>
    </footer>
</body>
</html>
