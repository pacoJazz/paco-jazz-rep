@extends('layouts.create_layout', ['title' => 'Créer une page'])


@section('content')

<div class="page-header">
	<h1 class="text-center">Créer une page</h1>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form method="POST" action="{{ route('pages.store') }}" autocomplete="off" novalidate>
			<div class="form-group {{ $errors->has('name')?'has-error':'' }}">
				<label class="control-label" for="name">Titre</label>
				<input type="text" name="name" id="name" autofocus class="form-control" value="{{ old('name') }}" placeholder="Inscrivez le titre de la page...">
				{!! $errors->first('name','<span class="help-block">:message</span>')!!}
			</div>
			<div class="form-group {{ $errors->has('content')?'has-error':'' }}">
				<label class="control-label" for="content">Contenu</label>
				<textarea name="content" id="content" class="form-control" cols="30" rows="10" placeholder="Inscrivez le contenu de la page...">{{ old('content') }}</textarea>
				{!! $errors->first('content','<span class="help-block">:message</span>')!!}
			</div>
			<input type="hidden" name="type" value="page">
			{{ csrf_field() }}
			<div class="form-group">
				<label>
					<input type="radio" name="online" value="0" checked>
					Mettre hors ligne
				</label><br>
				<label>
					<input type="radio" name="online" value="1">
					Mettre en ligne
				</label>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Créer une page &raquo;</button>
		</form>		
	</div>
</div>
@endsection