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
        <li class="{{ set_active_route('welcome') }}"><a href="{{ route('welcome') }}">Accueil</a></li>
        <?php $navs = get_nav(); ?>
        @foreach($navs as $nav)
        <li class="{{ set_active_route('page_path', $nav) }}"><a href="{{ route('page_path', $nav) }}">{{ $nav->name }}</a></li>
        @endforeach
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="{{ set_active_route('posts_path') }}"><a href="{{ route('posts_path') }}">Actualité</a></li>
        @if(! is_logged_in())
        <li class="{{ set_active_route('login_path') }}"><a href="{{ route('login_path') }}">Zone admin</a></li>
        @else
        <li><a href="{{ route('logout_path') }}">Se déconnecter</a></li>
        @endif

      </ul>
  </div>
    </div><!--/.nav-collapse -->
</nav>