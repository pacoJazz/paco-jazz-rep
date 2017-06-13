@extends('layouts.views', ['title' => 'Éditer une page'])


@section('content')

<div class="page-header">
	<h1 class="text-center">Éditer une page</h1>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form method="POST" action="{{ route('pages.update', $page) }}" autocomplete="off" novalidate>
			<div class="form-group {{ $errors->has('name')?'has-error':'' }}">
				<label class="control-label" for="name">Titre</label>
				<input type="text" name="name" id="name" autofocus class="form-control" value="{{ old('name')?:$page->name }}">
				{!! $errors->first('name','<span class="help-block">:message</span>')!!}
			</div>
			{{ method_field('PUT') }}
			<div class="form-group {{ $errors->has('content')?'has-error':'' }}">
				<label class="control-label" for="content">Contenu</label>
				<textarea name="content" id="content" class="form-control" cols="30" rows="10">{{ old('content')?:$page->content }}</textarea>
				{!! $errors->first('content','<span class="help-block">:message</span>')!!}
			</div>
			<input type="hidden" name="type" value="page">
			{{ csrf_field() }}
			<input type="hidden" name="online" value="0">
			<div class="form-group">
				<label>
					<input type="checkbox" name="online" value="1" {{ $page->online==1?'checked':'' }} >
					Mettre en ligne
				</label>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Éditer une page &raquo;</button>
		</form>		
	</div>
</div>
@endsection