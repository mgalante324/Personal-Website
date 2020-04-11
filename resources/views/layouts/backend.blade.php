<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'Mike Galante')}}</title>

        {{-- <link rel="icon" href="{{ URL::asset('../images/favicon_io/favicon.ico') }}" type="image/x-icon"/> --}}

        <style>
            body{
              background: #c9c9c9;
              color: #363636;
            }

        </style>
    </head>

    <body>
      @include('inc.navbar-2')
      @include('inc.messages')
      <div class="container">
        @yield('content')
      </div>
    </body>
</html>
