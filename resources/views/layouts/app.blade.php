<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="Alpha GRE">
    <meta name="author" content="AlphaTEDS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AlphaGRE8') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/swiper.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <div id="app">
        @include('nav.nav')
        <div class="container">
                @include('inc.mgs')
                @yield('content')
        </div>
  
        @include('nav.footer')
    </div>
      <!--   Core JS Files   -->
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('js/swiper.min.js')}}"></script>
  <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
  <script>
      $('textarea').ckeditor();
      // $('.textarea').ckeditor(); // if class is prefered.
  </script>
   <script>
    var swiper = new Swiper('.swiper-container');
  </script>

</body>
</html>
