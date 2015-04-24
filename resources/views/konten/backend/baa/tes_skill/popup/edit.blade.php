<h1> Edit mahasiswa </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('no_pendaftaran', 'Nomor pendaftaran : ') !!}
	<input type='text' value="{!! $ts->mst_pendaftaran->no_pendaftaran !!}" name='no_pendaftaran' placeholder='no pendaftaran...' id='no_pendaftaran' class='form-control'>
</div>

<div class='form-group'>
	{!! Form::label('kode_ruang', 'Kode ruangan : ') !!}
	{!! Form::select('kode_ruang', $kode_ruang, $ts->ref_ruang->kode_ruang, ['id' => 'kode_ruang']) !!}
</div>
 
 <div class='form-group'>
	{!! Form::label('ref_tes_skill_id', 'Skill : ') !!}
	{!! Form::select('ref_tes_skill_id', $ref_skill, $ts->ref_tes_skill_id, ['id' => 'ref_tes_skill_id']) !!}
</div>


 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
no_pendaftaran = $('#no_pendaftaran').val();
kode_ruang = $('#kode_ruang').val();
 

form_data ={
	no_pendaftaran : no_pendaftaran,
	kode_ruang		: kode_ruang,
	id : '{!! $ts->id !!}',
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("baa_tes_skill.update") }}',
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
