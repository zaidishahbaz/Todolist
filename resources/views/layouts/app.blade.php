<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ToDOList</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
      @yield('content')
    </div>
    <!-- Footer -->
  <footer class="page-footer font-small unique-color">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      Shahbazuddin Zaidi
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  </body>
</html>
