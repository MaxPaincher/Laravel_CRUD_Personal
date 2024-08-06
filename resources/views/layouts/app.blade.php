<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
</head>
<body>
  <h1 class="text-3xl font-bold container mx-auto">
    @yield('body')
  </h1>
  <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</body>
</html>
