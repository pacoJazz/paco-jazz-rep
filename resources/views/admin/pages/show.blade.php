@extends('layouts.views', ['title' => $page->name])


@section('content')

<div class="jumbotron">
	<h1 class="text-center">{{ $page->name }}</h1>
	<article>{!! $page->content !!}</article>
</div>

@endsection