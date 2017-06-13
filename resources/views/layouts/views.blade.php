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
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('posts_path') }}">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            @if(isset($post))
              <li class="{{ set_active_route('post_path') }}"><a href="{{ route('post_path', $post) }}">{{ $post->name }}</a></li>
            @else
              <li class="{{ set_active_route('page_path') }}"><a href="{{ route('page_path', $page) }}">{{ $page->name }}</a></li>
            @endif
          </ul>
        </div>
      </div><!--/.nav-collapse -->
    </nav>


    <div id="main-content">

      <div class="container">

        @yield('content')
        
      </div>

    </div>


    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>
