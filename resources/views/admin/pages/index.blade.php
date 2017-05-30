@extends('layouts.admin', ['title' => 'Gestion des pages'])


@section('content')
<div class="page-header">
	<h1>Gestion des pages</h1>
	@include('layouts.partials._flash')
</div>
<a href="{{ route('pages.create') }}" class="btn btn-info btn-sm pull-right">Créer une page</a>
<table class="table table-striped">
	<tr>
		<th class="text-center">ID</th>
		<th class="text-center">Etat</th>
		<th class="text-center">Titre</th>
		<th class="text-center">Actions</th>
	</tr>

	<?php foreach($pages as $page): ?>
		<tr>
			<td class="text-center"><?=$page->id ?></td>
			<td class="text-center"><?=$page->online==1?'<span class="online">En ligne</span>':'<span class="outline">Hors ligne</span>'; ?></td>
			<td class="text-center"><?=$page->name ?></td>
			<td class="text-center">
				<a href="{{ route('pages.show', $page) }}" class="btn btn-success btn-sm">Prévisualiser</a>
				<a href="{{ route('pages.edit', $page) }}" class="btn btn-primary btn-sm">Editer</a>
				<a href="{{ route('pages.destroy', $page) }}" data-method="DELETE" data-confirm="Êtes-vous sûr(e) ?" class="btn btn-danger btn-sm">Supprimer</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
@endsection