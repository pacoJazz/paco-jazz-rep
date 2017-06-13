@extends('layouts.admin', ['title' => 'Gestion des article'])


@section('content')
<div class="page-header">
  <h1>Gestion des articles <small>( {{ $posts->count() }} articles créés )</small></h1>
</div>
@include('layouts.partials._flash')
<a href="{{ route('posts.create') }}" class="btn btn-info btn-sm pull-right">Créer un article</a>
<table class="table table-striped">
	<tr>
		<th class="text-center">ID</th>
		<th class="text-center">Etat</th>
		<th class="text-center">Titre</th>
		<th class="text-center">Actions</th>
	</tr>

	<?php foreach($posts as $post): ?>
		<tr>
			<td class="text-center"><?= $post->id ?></td>
			<td class="text-center"><?= $post->online==1?'<span class="online">En ligne</span>':'<span class="outline">Hors ligne</span>'; ?></td>
			<td class="text-center"><?= $post->name ?></td>
			<td class="text-center">
				<a href="{{ route('posts.show', $post) }}" class="btn btn-success btn-sm">Prévisualiser</a>
				<a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm">Editer</a>
				<a href="{{ route('posts.destroy', $post) }}" data-method="DELETE" data-confirm="Êtes-vous sûr(e) ?" class="btn btn-danger btn-sm">Supprimer</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<center>
	{{ $posts->links() }}
</center>
@endsection