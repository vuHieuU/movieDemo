<!doctype html>
<html lang="en">
  <head>
  @include('admin.layout.head')
    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
    {{-- sitebar --}}
    @include('admin.layout.sitebar')

    @yield('content')

    
     @include('admin.layout.footer')
  </body>
</html>