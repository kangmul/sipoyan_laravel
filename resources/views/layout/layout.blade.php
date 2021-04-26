<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIPOYAN</title>

  {{-- General CSS File --}}
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/all.css') }}">

  {{-- Template CSS --}}
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">

</head>

<body>
   
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-lg"></div>

      @section('navbar')
    </div>
  </div>
   <!-- Template JS File -->
<script src="{{ url('assets/js/scripts.js') }}  "></script>
  <script src="{{ url('assets/js/custom.js') }}  "></script>
</body>
</html>