<button id='do_validasi' style='font-size:30px;' class='btn btn-info'> 
	<i class='fa fa-check-circle-o'></i> Validasi Pendaftaran
</button>
 
<script>
$('#do_validasi').click(function(){

setuju = confirm('are you sure?');
if(setuju == true){
	$.ajax({
		url : '{!! route("validasi_pendaftaran.do_validasi") !!}',
		data : {submit : 1},
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
