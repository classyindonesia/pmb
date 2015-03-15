<i id='change{!! $list->id !!}' class='fa fa-lock' data-toggle='tooltip' title='change status' style='cursor:pointer'></i>
<script type="text/javascript">
$('#change{!! $list->id !!}').click(function(){
	setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{!! route("admin_api_akses.change_status") !!}',
			data : {id : '{!! $list->id !!}'},
			type : 'post',
			error:function(err){
				alert('error! terjadi kesalahan pada sisi server!');
			},
			success:function(ok){
				window.location.reload();
			}
		})
	}
})
</script>

||

<i id='reg{!! $list->id !!}' class='fa fa-random' data-toggle='tooltip' title='re-generate api_key' style='cursor:pointer'></i>
<script type="text/javascript">
$('#reg{!! $list->id !!}').click(function(){
	setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{!! route("admin_api_akses.regenerate_key") !!}',
			data : {id : '{!! $list->id !!}'},
			type : 'post',
			error:function(err){
				alert('error! terjadi kesalahan pada sisi server!');
			},
			success:function(ok){
				window.location.reload();
			}
		})
	}
})
</script>