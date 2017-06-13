@extends('layouts.views', ['title' => 'Éditer un article'])


@section('content')

<div class="page-header">
	<h1 class="text-center">Éditer un article</h1>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form method="POST" action="{{ route('posts.update', $post) }}" autocomplete="off" novalidate>
			<div class="form-group {{ $errors->has('name')?'has-error':'' }}">
				<label class="control-label" for="name">Titre</label>
				<input type="text" name="name" id="name" autofocus class="form-control" value="{{ old('name')?:$post->name }}">
				{!! $errors->first('name','<span class="help-block">:message</span>')!!}
			</div>
			{{ method_field('PUT') }}
			<div class="form-group {{ $errors->has('content')?'has-error':'' }}">
				<label class="control-label" for="content">Contenu</label>
				<textarea name="content" id="content" class="form-control" cols="30" rows="10">{{ old('content')?:$post->content }}</textarea>
				{!! $errors->first('content','<span class="help-block">:message</span>')!!}
			</div>
			<input type="hidden" name="type" value="post">
			{{ csrf_field() }}
			<input type="hidden" name="online" value="0">
			<div class="form-group">
				<label>
					<input type="checkbox" name="online" value="1" {{ $post->online==1?'checked':'' }} >
					Mettre en ligne
				</label>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Éditer un article &raquo;</button>
		</form>		
	</div>
</div>
@endsection