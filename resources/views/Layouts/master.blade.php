<!doctype html>
<html>
<head>

    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/images/favicon.ico">
    @yield('head')
</head>
<body>

      @yield('header')

    <div class="content">
      @yield('content')
    </div>
      @yield('body')

    <footer>
      @yield('footer')
      </footer>



</body>
</html>
