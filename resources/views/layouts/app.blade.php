<!DOCTYPE html>
<html>
<head>
  <title>Ayura</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
  <div class="body-content">
    @include('layouts.sidebar')
    <div class="content-container">
      @yield('content')
    </div>
  </div>

  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>