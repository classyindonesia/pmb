<script type="text/javascript">

$('#pesan').click(function(){

	$('#pesan').fadeOut('slow', function(){
		$('#pesan').html('')
			.fadeIn()
			.removeClass('alert alert-danger animated shake');
	});
})


$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
ref_sma_id = $('#ref_sma_id').val();
ref_prodi_id1 = $('#ref_prodi_id1').val();
ref_prodi_id2 = $('#ref_prodi_id2').val();
alamat = $('#alamat').val();
tempat_lahir = $('#tempat_lahir').val();
tgl_lahir = $('#thn_lahir').val()+'-'+$('#bln_lahir').val()+'-'+$('#tgl_lahir').val();
no_ijazah = $('#no_ijazah').val();
thn_lulus = $('#thn_lulus').val();
no_hp = $('#no_hp').val();
ref_gelombang_id = $('#ref_gelombang_id').val();
alamat_email = $('#alamat_email').val();
 
 

form_data ={
	nama 				: nama,
 	ref_sma_id 			: ref_sma_id,
 	alamat_email		: alamat_email,
	alamat 				: alamat,
	tempat_lahir 		: tempat_lahir,
	tgl_lahir 			: tgl_lahir,
	no_hp 				: no_hp,
	id 					: '{!! $b->id !!}',
	no_ijazah 			: no_ijazah,
	thn_lulus 			: thn_lulus,
 
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("camaba.update_biodata") }}',
		data : form_data,
		type : 'post',
		error:function(xhr, status, error){
 

			$('#simpan').removeAttr('disabled');
	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });

		      //    alert('error! terjadi kesalahan pada sisi server!')
		},
		success:function(ok){
			alert('data telah tersimpan');
			  window.location.reload();
		}
	})
})
</script>