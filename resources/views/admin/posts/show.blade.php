@extends('layouts.views', ['title' => $post->name])


@section('content')

<div class="jumbotron">
	<h1 class="text-center">{{ $post->name }}</h1>
	<article>{!! $post->content !!}</article>
</div>

@endsection