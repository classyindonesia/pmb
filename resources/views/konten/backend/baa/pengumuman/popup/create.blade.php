<h1> Tambahkan pengumuman </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('no_pendaftaran', 'Nomor pendaftaran : ') !!}
	<input type='text' name='no_pendaftaran' placeholder='no pendaftaran...' id='no_pendaftaran' class='form-control'>
</div>

<div class='form-group'>
	{!! Form::label('ref_prodi_id', 'Prodi : ') !!}
	{!! Form::select('ref_prodi_id', $ref_prodi, '', ['id' => 'ref_prodi_id']) !!}
</div>
 

 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
no_pendaftaran = $('#no_pendaftaran').val();
ref_prodi_id = $('#ref_prodi_id').val();
 

form_data ={
	no_pendaftaran : no_pendaftaran,
	ref_prodi_id		: ref_prodi_id,
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("pengumuman.insert") }}',
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
			window.location.reload();
		}
	})
})
</script>
