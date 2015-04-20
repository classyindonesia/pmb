<script type="text/javascript">

function check_pin(){
	$('.modal-body').html('');

	if($('#pin').val() == ''){
		return false;
	}
pin = $('#pin').val();

	$.ajax({
		url : '{!! route("pendaftaran_online.check_pin") !!}',
		data : {pin : pin},
		type : 'post',
		error:function(err){
			alert('error! terjadi kesalahan pada sisi server!');
		},
		success:function(ok){
			if(ok == 0){
				$('#myModal').modal('show');
				$('.modal-body').html('<div class="alert alert-danger"><h1>Error!</h1> <hr>  PIN tidak ditemukan </div>');
			}else{
				var hasil = jQuery.parseJSON( ok );
				if(hasil.status == 1){
					$('#myModal').modal('show');
					$('.modal-body').html('<div class="alert alert-danger"><h1>Error!</h1> <hr>  PIN sudah pernah digunakan! </div>');					
				}else if(hasil.status == 2){
					$('#myModal').modal('show');
					$('.modal-body').html('<div class="alert alert-danger"><h1>Error!</h1> <hr>  PIN sudah tidak bisa digunakan / expired! </div>');					
				}else{
					$('#konten').load('{!! url("pendaftaran_online/get_form_biodata") !!}/'+hasil.pin);
				}
			}
		}
	})
}

$("#pin").keypress(function(e) {
    if(e.which == 13) {
    	check_pin();
    }
});

$('#submit').click(function(){
	check_pin();
})
 


</script>