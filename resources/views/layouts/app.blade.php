<!DOCTYPE html>
<html>
<head>
  <title>+ KARMA</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
  <div class="body-content">
    @yield('sidebar')
    @yield('content')
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ URL::asset('js/vendor.js') }}"></script>
    @yield('javascript')
  </div>
</body>
</html>