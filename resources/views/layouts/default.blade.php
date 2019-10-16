<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title','崋箜流年')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body>
  @include('layouts._header')
  <div class="container">
    <div class="offset-md-1 col-md-10">
      @include('shared._message')
      @yield('content')
      @include('layouts._footer')
    </div>
  </div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>
