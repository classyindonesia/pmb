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
			$('.modal-body').html('<h1> <i class="fa fa-check"></i> data telah tersimpan</h1>')
			 // window.location.reload();
		}
	});

});
 




@include('konten.backend.baa.biodata.popup.komponen.input_int_only')




</script>