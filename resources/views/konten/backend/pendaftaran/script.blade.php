<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
ref_sma_id = $('#ref_sma_id').val();
ref_prodi_id1 = $('#ref_prodi_id1').val();
ref_prodi_id2 = $('#ref_prodi_id2').val();
alamat = $('#alamat').val();
tempat_lahir = $('#tempat_lahir').val();
tgl_lahir = $('#tgl_lahir').val();
no_ijazah = $('#no_ijazah').val();
thn_lulus = $('#thn_lulus').val();
ref_gelombang_id = $('#ref_gelombang_id').val();


 

form_data ={
	nama : nama,
	ref_sma_id :ref_sma_id,
	ref_prodi_id1 :  ref_prodi_id1,
	ref_prodi_id2 : ref_prodi_id2,
	alamat : alamat,
	tempat_lahir : tempat_lahir,
	tgl_lahir : tgl_lahir,
	no_ijazah : no_ijazah,
	thn_lulus : thn_lulus,
	ref_gelombang_id :ref_gelombang_id,

 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("operator_pendaftaran.store") }}',
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

		      //    alert('error! terjadi kesalahan pada sisi server!')
		},
		success:function(ok){
			// window.location.reload();
		}
	})
})
</script>