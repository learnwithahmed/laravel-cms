<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Employee Management Dashboard</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> @yield('css')
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>

<body>
  <!-- top nav -->
  @include('layouts.nav')

  <!-- Content Container. Contains page content -->
  <div class="container">
    <div class="columns">
      <div class="column is-3">
        <!-- Sidebar -->
        @include('layouts.sidebar')
      </div>
      <div class="column is-9">
        @include('layouts.banner') 
        <!-- content -->
        @yield('content')
      </div>
  <!-- Styles -->
  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
</body>

</html>