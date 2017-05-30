@extends('layouts.default', ['title' => $post->name])


@section('content')

<div class="jumbotron">
	@include('layouts.partials._flash')
	<h1 class="text-center">{{ $post->name }}</h1>
	<article>{!! $post->content !!}</article>
</div>

@endsection