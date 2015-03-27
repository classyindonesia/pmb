{!! Action::edit(false, route("admin_users.edit", $list->id), $list->id) !!}

@if(Auth::user()->id != $list->id)
|
	@include('konten.backend.users.action.del')
@endif

|

<i data-toggle='tooltip' title='reset password' id='reset_pass{!! $list->id !!}' class='fa fa-refresh' style='cursor:pointer;'></i>
<script type="text/javascript">
$('#reset_pass{!! $list->id !!}').click(function(){
	setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{{ URL::route("admin_users.reset_password") }}',
			data : {id : '{{ $list->id }}', _token : '{!! csrf_token() !!}'},
			type : 'post',
			error: function(err){
				alert('error! terjadi sesuatu pada sisi server!');
			},
			success:function(ok){
				window.location.reload();
			}
		})
	}
})

</script>