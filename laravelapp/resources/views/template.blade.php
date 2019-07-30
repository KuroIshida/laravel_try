<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Test Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap_4_3_1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div class="container">
      @include('base/navbar')
      @yield('main') <!-- yield is same as section, quotes on the bracket is the name of the section-->
    </div>

      @yield('footer')

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('bootstrap_4_3_1/js/bootstrap.min.js')}}"></script>
  </body>
</html>
