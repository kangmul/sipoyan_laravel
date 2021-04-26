<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIPOYAN</title>

  {{-- General CSS File --}}
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/all.css') }}">


{{-- <!-- CSS Libraries --> --}}
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/selectric/public/selectric.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/jquery-ui-dist/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/vendor/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">



  {{-- Template CSS --}}
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">

</head>

<body>
   
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>

      @include('template/navbar')
      @include('template/sidebar')

      {{-- main Content --}}
      <div class="main-content">
        <section class="section">
          @section('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Stisla</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
  
  
  
  <!-- General JS Scripts -->
  <!-- load first -->
  <script src="{{ url('assets/js/jquery-3.3.1.min.js')}}"></script>

  <script src="{{ url('assets/js/popper.min.js')}}"></script>
  <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ url('assets/js/moment.min.js')}}"></script>
  <script src="{{ url('assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ url('assets/vendor/node_modules/cleave.js/dist/cleave.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/cleave.js/dist/addons/cleave-phone.us.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/selectric/public/jquery.selectric.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/sweetalert/dist/sweetalert.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/jquery-ui-dist/jquery-ui.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ url('assets/vendor/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
  
  
  <!-- Template JS File -->
  <script src="{{ url('assets/js/scripts.js') }}  "></script>
  <script src="{{ url('assets/js/custom.js') }}  "></script>
</body>
</html>