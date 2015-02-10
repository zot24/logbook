<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head', ['css' => 'css/frontend.css'])
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  @include('includes.footer', ['js' => 'js/frontend.js'])
</body>
</html>