<button class="btn btn-danger" id='del{{ $list->id }}'>
	<i class='fa fa-times' ></i> delete
</button>


<script type="text/javascript">
$('#del{{ $list->id }}').click(function(){

setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{{ route("backend.galery.del_album") }}',
			data : {id : '{{ $list->id }}', _token : '{!! csrf_token() !!}' },
			type : 'post',
			error: function(err){
				alert('terjadi kesalahan pada sisi server!')
			},
			success:function(ok){
				window.location.reload();
			}
		});
	}
});
</script>


