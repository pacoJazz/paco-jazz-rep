@extends('layouts.default', ['title' => 'Se connecter'])



@section('content')
<div class="page-header">
	<h1 class="text-center">Zone réservée</h1>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		@include('layouts.partials._flash')
		<form method="POST" action="{{ route('effective_login') }}" autocomplete="off" novalidate>
			<div class="form-group {{ $errors->has('email')?'has-error':'' }}">
				<label class="control-label" for="email">Adresse email</label>
				<input type="text" name="email" id="email" class="form-control" autofocus value="{{ old('email') }}" placeholder="Exemple: john@doe.com">
				{!! $errors->first('email','<span class="help-block">:message</span>')!!}
			</div>
			<div class="form-group {{ $errors->has('password')?'has-error':'' }}">
				<label class="control-label" for="password">Mot de passe <a href="{{ route('forget_path') }}">(Mot de passe oublié ?)</a></label>
				<input type="password" name="password" id="password" class="form-control">
				{!! $errors->first('password','<span class="help-block">:message</span>')!!}
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Se connecter &raquo;</button>		
			</div>
			{{ csrf_field() }}
		</form>
	</div>
</div>
@endsection