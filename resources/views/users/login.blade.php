@extends('layouts.default', ['title' => 'Se connecter'])



@section('content')
<div class="page-header">
	<h1 class="text-center">Zone réservée</h1>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2 well">
		@include('layouts.partials._flash')
		<form method="POST" action="{{ route('effective_login') }}" autocomplete="off" novalidate>
			<div class="form-group {{ $errors->has('identifiant')?'has-error':'' }}">
				<label class="control-label" for="identifiant">Inscrivez votre pseudo ou adresse email</label>
				<input type="text" name="identifiant" id="identifiant" class="form-control" autofocus value="{{ old('identifiant') }}" placeholder="Exemple: john@doe.com">
				{!! $errors->first('identifiant','<span class="help-block">:message</span>')!!}
			</div>
			<div class="form-group {{ $errors->has('password')?'has-error':'' }}">
				<label class="control-label" for="password">Mot de passe <a href="{{ route('forget_path') }}">( Auriez vous oublié votre mot de passe oublié ? )</a></label>
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