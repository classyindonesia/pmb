<h3>Create PIN Pendaftaran</h3>
<hr style='margin:2px;'>


<div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('pin', 'Nomor Pin : ') !!}
	<input type='text' name='pin' placeholder='Nomor Pin...' id='pin' class='form-control'>
</div>

 

 <div class='form-group'>
 	<button id='generate' class='btn btn-info'><i class='fa fa-floppy-o'></i> SIMPAN</button>
</div>



<script type="text/javascript">
 
$('#pin').keyup(function(){
	var pin = $('#pin').val();
	var res = pin.toUpperCase();
	$('#pin').val(res);
});
 

$('#pin').keydown(function(e) {

	if (e.keyCode == 32) {
		return false;
	}
});
 


$('#generate').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
 pin = $('#pin').val();

form_data ={
	pin : pin,
 	_token : '{!! csrf_token() !!}'
}
 
$('#generate').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("admin_pin.store") }}',
		data : form_data,
		type : 'post',
		error:function(xhr, status, error){
			$('#generate').removeAttr('disabled');
	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });
 
		      //    alert('error! terjadi kesalahan pada sisi server!')
		},
		success:function(ok){
			alert('pin telah ditambahkan!');
			 window.location.reload();
		}
	})
})
</script>
