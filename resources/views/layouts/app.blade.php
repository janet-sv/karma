<!DOCTYPE html>
<html>
<head>
  <title>Ayura</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
  <div class="body-content">
    <div class="fixed">
      @include('layouts.sidebar')
    </div>
    <div class="content-container">
      @yield('content')
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ URL::asset('js/vendor.js') }}"></script>
    @yield('javascript')
  </div>
</body>
</html>