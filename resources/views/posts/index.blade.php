@extends('layouts.default', ['title' => 'Actualité'])


@section('content')
<div class="page-header">
	<h1>Le blog</h1>
</div>

@foreach($posts as $post)
<div class="clearfix">
	<h2>{{ $post->name }}</h2>
	<article>{!! substr($post->content, 0, 150).'...' !!}</article>
	<a href="{{ route('post_path', $post) }}">Lire la suite &rarr;</a>
</div>
@endforeach
<center>
	{{ $posts->links() }}
</center>
@endsection