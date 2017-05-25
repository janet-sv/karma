<!DOCTYPE html>
<html>
<head>
  <title>Ayura</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
  <div class="container">
    <div id="sidebar" class="sidebar-container">
      <sidebar></sidebar>
    </div>
    <div class="content-container">
      @yield('content')
    </div>
  </div>

  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>