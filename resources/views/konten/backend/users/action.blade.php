{!! Action::edit(false, route("admin_users.edit", $list->id), $list->id) !!}

@if(Auth::user()->id != $list->id)
|
	@include('konten.backend.users.action.del')
@endif