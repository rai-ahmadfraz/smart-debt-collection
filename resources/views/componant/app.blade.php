<!DOCTYPE html>
<html lang="en">


 <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{url('vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">

  <link rel="stylesheet" href="{{url('vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.addons.css')}}">

  <link rel="stylesheet" href="{{url('css/style.css')}}">

  <link rel="shortcut icon" href="images/favicon.png" />

  @yield('link')

</head>

<body>
    <div class="container-scroller">
        @include('componant.nav')

    @yield('content')

    </div>

  <script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{url('vendors/js/vendor.bundle.addons.js')}}"></script>

  <script src="{{url('js/template.js')}}"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('js/dashboard.js')}}"></script>
  <script src="{{url('js/todolist.js')}}"></script>
  @yield('script')
</body>
</html>
