<html>

<head>
    <title> @yield('title')</title>

    <link  rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    
    <link  rel="stylesheet" href="{{ asset('frontend/css/custome.css') }}">
</head>

<body>

  @include('frontend.layouts.header')


  @yield('content')
  
  
  @include('frontend.layouts.footer')


  <script src="{{ asset('frontend/js/jquery-3.4.1.slim.min.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.minjs') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/custome.js') }}"></script>
</body>

</html>
