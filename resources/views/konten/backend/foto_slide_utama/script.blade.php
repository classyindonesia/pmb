<script>
function delFoto(id_foto){
	setuju= confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{!! route("foto_slide_utama.del") !!}',
			data : {id : id_foto},
			type : 'post',
			error:function(err){
				alert('error! terjadi kesalahan pada sisi server!');
			},
			success:function(ok){
				window.location.reload();
			}
		})
	}
}

</script>
