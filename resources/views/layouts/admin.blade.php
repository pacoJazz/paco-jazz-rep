<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('posts.index') }}">ADMINISTRATION</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ set_active_route('posts.index') }}"><a href="{{ route('posts.index') }}">Articles</a></li>
            <li class="{{ set_active_route('pages.index') }}"><a href="{{ route('pages.index') }}">Pages</a></li>
            <li><a href="{{ route('posts_path') }}" target="_blank">Voir le site</a></li>
            @if(is_logged_in())
            <li><a href="{{ route('logout_path') }}">Se déconnecter</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="main-content">

      <div class="container">

        @yield('content')
        
      </div>

    </div>


    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/larails.js') }}"></script>
  </body>
</html>
