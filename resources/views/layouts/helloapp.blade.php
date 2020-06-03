<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <style></style>
</head>
<body>
  <h1>@yield('title')</h1>
  @section('menubar')
  <h2 class="menutitle">※メニュー</h2>
  <ul>
    <li>@show</li>
  </ul>
  <hr size="1">
  <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>
</html>