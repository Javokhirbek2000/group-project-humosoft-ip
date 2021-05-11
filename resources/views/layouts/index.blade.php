<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ __('global.app_title') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
  @include('partials.header')

  <main>
    @yield('content')
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
