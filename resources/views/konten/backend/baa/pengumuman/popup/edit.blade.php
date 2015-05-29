<h1> Edit Pengumuman </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('no_pendaftaran', 'Nomor pendaftaran : ') !!}
	<input type='text' @if(count($png->mst_pendaftaran)>0) value="{!! $png->mst_pendaftaran->no_pendaftaran !!}" @endif name='no_pendaftaran' placeholder='no pendaftaran...' id='no_pendaftaran' class='form-control'>
</div>

<div class='form-group'>
	{!! Form::label('ref_prodi_id', 'Prodi : ') !!}
	{!! Form::select('ref_prodi_id', $ref_prodi, $png->ref_prodi_id, ['id' => 'ref_prodi_id']) !!}
</div>
 


<div class='form-group'>
	{!! Form::label('ref_status_daftar_ulang_id', 'Status Daftar Ulang : ') !!}
	{!! Form::select('ref_status_daftar_ulang_id', $ref_status_daftar_ulang, $png->ref_status_daftar_ulang_id, ['id' => 'ref_status_daftar_ulang_id']) !!}
</div>
 


 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
no_pendaftaran = $('#no_pendaftaran').val();
ref_prodi_id = $('#ref_prodi_id').val();
ref_status_daftar_ulang_id = $('#ref_status_daftar_ulang_id').val();
 


form_data ={
	id 							: '{!! $png->id !!}',
	no_pendaftaran 				: no_pendaftaran,
	ref_status_daftar_ulang_id 	: ref_status_daftar_ulang_id,
	ref_prodi_id				: ref_prodi_id,
 	_token 						: '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("pengumuman.update") }}',
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
