<h1> Edit Ruang </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('nama', 'Nama Ruang : ') !!}
	<input type='text' value='{!! $ref_ruang->nama !!}' name='nama' placeholder='Nama Ruang...' id='nama' class='form-control'>
</div>


 <div class='form-group'>
	{!! Form::label('kode_ruang', 'Kode Ruang : ') !!}
	<input type='text' value='{!! $ref_ruang->kode_ruang !!}' name='kode_ruang' placeholder='Kode Ruang...' id='kode_ruang' class='form-control'>
</div>


 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
kode_ruang = $('#kode_ruang').val();
 

form_data ={
	nama : nama,
	id : '{!! $ref_ruang->id !!}',
	kode_ruang		: kode_ruang,
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("baa_ref_ruang.update", $ref_ruang->id) }}',
		data : form_data,
		type : 'put',
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
