@extends('layouts.forget_layout', ['Réinitialisation du mot de passe'])


@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Réinitialiser mon mot de passe</h1>
		<form method="POST" action="{{ route('eff_recovery', $user) }}" autocomplete="off">
			<div class="form-group {{ $errors->has('password')?'has-error':'' }}">
				<label class="control-label" for='password'>Nouveau mot de passe</label>
				<input type="password" name="password" id="password" autofocus class="form-control">
				{!! $errors->first('password','<span class="help-block">:message</span>') !!}
			</div>
			{{ method_field('PUT') }}
			{{ csrf_field() }}
			<div class="form-group {{ $errors->has('password_confirmation')?'has-error':'' }}">
				<label class="control-label" for="password_confirm">Confirmez votre mot de passe</label>
				<input type="password" name="password_confirmation" id="password_confirm" class="form-control">
				{!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Réinitialiser le mot de passe &raquo;</button>
			</div>
		</form>
	</div>
</div>
@endsection