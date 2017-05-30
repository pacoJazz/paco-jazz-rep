@extends('layouts.default', ['title' => "S'inscrire"])



@section('content')
<div class="page-header">
	<h1 class="text-center">Créer un compte</h1>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form method="POST" action="{{ route('eff_register') }}" autocomplete="off" novalidate>

			<div class="form-group {{ $errors->has('email')?'has-error':'' }}">
				<label class="control-label" for="name">Nom complet</label>
				<input type="text" name="name" id="name" class="form-control" autofocus value="{{ old('name') }}">
				{!! $errors->first('name','<span class="help-block">:message</span>')!!}
			</div>

			<div class="form-group {{ $errors->has('email')?'has-error':'' }}">
				<label class="control-label" for="email">Adresse email</label>
				<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
				{!! $errors->first('email','<span class="help-block">:message</span>')!!}
			</div>

			<div class="form-group {{ $errors->has('password')?'has-error':'' }}">
				<label class="control-label" for="password">Mot de passe</label>
				<input type="password" name="password" id="password" class="form-control">
				{!! $errors->first('password','<span class="help-block">:message</span>')!!}
			</div>

			<div class="form-group {{ $errors->has('password')?'has-error':'' }}">
				<label class="control-label" for="password_confirm">Confirmez votre mot de passe</label>
				<input type="password" name="password_confirmation" id="password_confirm" class="form-control">
			</div>

			{{ csrf_field() }}

			<button type="submit" class="btn btn-primary btn-block">Créer un compte &raquo;</button>

		</form>
	</div>
</div>
@endsection