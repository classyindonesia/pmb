<script>

$('#simpan').click(function(){

    @include('konten.backend.baa.biodata.popup.komponen.value_post_script')
	@include('konten.backend.baa.biodata.popup.komponen.kondisi_global_simpan')


 

$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("backend_validasi_biodata.update") }}',
		data : form_data,
		type : 'post',
		error:function(xhr, status, error){
			$('#myModal').modal('show');
			$('.modal-body').html('<div id="pesan"></div>')

		$('#simpan').removeAttr('disabled');

	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });
		},
		success:function(ok){
			$('#myModal').modal('show');
			$('.modal-body').html('<h1 class="alert alert-success"> <i class="fa fa-check"></i> data telah tersimpan</h1>');
			$('#simpan').removeAttr('disabled');

			$('#myModal').on('hidden.bs.modal', function (e) {
			 	window.location.reload();
			});			
			  

		}
	});

});
 

$(document).ready(function(){
	$('#validasi').attr('data-toggle', 'tooltip');
	$('#validasi').attr('title', 'belum bisa melakukan validasi, karena data belum disimpan');
	$('#validasi').attr('disabled', 'disabled');
});



@include('konten.backend.baa.biodata.popup.komponen.input_int_only')




</script>