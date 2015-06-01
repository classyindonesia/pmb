<h1> Tambahkan Prodi Perguruan Tinggi </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('nama', 'Nama Prodi Perguruan Tinggi : ') !!}
	<input type='text' name='nama' placeholder='Nama Prodi Perguruan Tinggi...' id='nama' class='form-control'>
</div>

 
 <div class='form-group'>
	{!! Form::label('ref_perguruan_tinggi_id', 'Perguruan Tinggi : ') !!}
	{!! Form::select('ref_perguruan_tinggi_id', $ref_perguruan_tinggi, '', ['id' => 'ref_perguruan_tinggi_id']) !!}
</div>


 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
  ref_perguruan_tinggi_id = $('#ref_perguruan_tinggi_id').val();

form_data ={
	nama : nama,
	ref_perguruan_tinggi_id : ref_perguruan_tinggi_id,
  	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("backend_ref_prodi_pt.store") }}',
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
