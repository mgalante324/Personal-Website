<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mike Galante') }}</title>

    <link rel="icon" href="{{ URL::asset('../images/favicon_io/favicon.ico') }}" type="image/x-icon"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('vender/fortawesome/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> --}}

    <script src="https://kit.fontawesome.com/3b249eb279.js" crossorigin="anonymous"></script>
</head>

<body>
    {{-- <div id="app">
      @include('inc.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

    @include('inc.navbar')
    <div class="container-fluid">
      @yield('content')
    </div>

    <!-- Scripts -->

    <!-- Bootstrap responsive navbar -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script>
      // Change navbar on scroll
      $(window).scroll(function() {
        $('nav').toggleClass('navbar-scrolled', $(this).scrollTop() > 10);
      });

      // Animate left intro text when intro section is in view
      $(window).scroll(function() {
        $('.text-wrapper-left').toggleClass('left-scrolled', $(this).scrollTop() > 400);
      });

      // Animate right intro text when intro section is in view
      $(window).scroll(function() {
        $('.text-wrapper-right').toggleClass('right-scrolled', $(this).scrollTop() > 400);
      });
    </script>

</body>
</html>
