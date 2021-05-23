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
  @include('partials.admin-header')

  <div class="container-fluid">
    <div class="row">
      @include('partials.admin-sidebar')

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('content')
      </main>
    </div>
  </div>
  <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
