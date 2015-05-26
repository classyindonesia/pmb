<h1> Edit Perguruan Tinggi </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('nama', 'Nama Perguruan Tinggi : ') !!}
	<input type='text' name='nama' value="{!! $ref_perguruan_tinggi->nama !!}" placeholder='Nama Perguruan Tinggi...' id='nama' class='form-control'>
</div>

 

 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
  

form_data ={
	nama : nama,
	id : '{!! $ref_perguruan_tinggi->id !!}',
  	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("backend_ref_perguruan_tinggi.update", $ref_perguruan_tinggi->id) }}',
		data : form_data,
		type : 'patch',
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
