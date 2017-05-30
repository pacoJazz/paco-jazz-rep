@extends('layouts.admin', ['title' => 'Changer de mot de passe'])



@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="text-center">Changer de mot de passe</h1>
		<form method="POST" action="{{ route('password_update', $user) }}" autocomplete="off">
			<div class="form-group {{ $errors->has('old_password')?'has-error':'' }}">
				<label class="control-label" for="old_password">Mot de passe actuel</label>
				<input type="password" name="old_password" id="old_password" autofocus class="form-control">
				{!! $errors->first('old_password','<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {{ $errors->has('password')?'has-error':'' }}">
				<label class="control-label" for="password">Nouveau mot de passe</label>
				<input type="password" name="password" id="password" class="form-control">
				{!! $errors->first('password','<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {{ $errors->has('password_confirmation')?'has-error':'' }}">
				<label class="control-label" for="password_confirm">Confirmez votre mot de passe</label>
				<input type="password" name="password_confirmation" id="password_confirm" class="form-control">
				{!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Changer de mot de passe &raquo;</button>
			</div>
			{{ csrf_field() }}
			{{ method_field('PUT') }}
		</form>
	</div>
</div>
@stop