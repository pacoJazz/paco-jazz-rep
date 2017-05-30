@if(session()->has('notification.message'))
<div class="alert alert-{{ session()->get('notification.type') }}">
	<button type="submit" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5 class="text-center">{{ session()->get('notification.message') }}</h5>
</div>
@endif