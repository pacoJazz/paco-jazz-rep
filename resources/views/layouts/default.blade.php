<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Mon super site">
    <meta name="author" content="Papa Mouhamadou DIOP">

    <title>
      {{ isset($title) ? $title.' - '.config('app.name'):config('app.name') }}
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

  </head>

  <body>

    @include('layouts/partials/_nav')

    <div id="main-content">

      <div class="container">

        @yield('content')
        
      </div>

    </div>


    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>
