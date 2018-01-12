<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>2018勤益貼圖競賽</title>

        <!-- Styles -->
        <link href="import/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="import/scrolling-nav.css" rel="stylesheet">
      @yield('style')
    </head>
        @yield('content')
    <footer class="py-5 bg-dark">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
          </div>
          <!-- /.container -->
    </footer>
    <script src="import/jquery/jquery.min.js"></script>
    <script src="import/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="import/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="import/scrolling-nav.js"></script>
</html>
