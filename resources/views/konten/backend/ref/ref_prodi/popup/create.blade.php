<h3>Tambah Prodi</h3>
<hr style='margin:2px;'>


<div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('nama', 'Nama Prodi : ') !!}
	<input type='text' name='nama' placeholder='nama Prodi...' id='nama' class='form-control'>
</div>

 
<div class='form-group'>
	{!! Form::label('kode_prodi', 'Kode Prodi : ') !!}
	<input type='text' name='kode_prodi' placeholder='kode Prodi...' id='kode_prodi' class='form-control'>
</div>


 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
kode_prodi = $('#kode_prodi').val();



form_data = {
	nama : nama,
	kode_prodi : kode_prodi,
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("admin_ref_prodi.store") }}',
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
