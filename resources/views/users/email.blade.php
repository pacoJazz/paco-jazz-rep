@extends('layouts.forget_layout', ['title' => 'Réinitialiser le mot de passe'])

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		@include('layouts.partials._flash')
		<form method="POST" action="{{ route('send_path') }}" autocomplete="off">
			<h1 class="text-center">Réinitialiser le mot de passe</h1>
			<div class="form-group {{ $errors->has('email')?'has-error':'' }}">
				<label class="control-label" for="email">Inscrivez votre adresse email</label>
				<input type="text" name="email" id="email" autofocus class="form-control" value="{{ old('email') }}">
				{!! $errors->first('email','<span class="help-block">:message</span>')!!}
			</div>
			{{ csrf_field() }}
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Envoyer un lien de réinitialisation &raquo;</button>
			</div>
		</form>
	</div>
</div>
@stop