@extends('layouts.default', ['title' => $page->name])


@section('content')

<div class="jumbotron">
	@include('layouts/partials/_flash')
	<h1 class="text-center">{{ $page->name }}</h1>
	<article>{!! $page->content !!}</article>
</div>

@endsection