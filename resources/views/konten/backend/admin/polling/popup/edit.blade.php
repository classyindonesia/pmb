<h1> Tambahkan Pertanyaan </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('judul', 'Judul : ') !!}
	<input type='text' name='judul' value="{!! $polling->judul !!}" placeholder='Judul pertanyaan...' id='judul' class='form-control'>
</div>

 


<div class='form-group'>
	{!! Form::label('pertanyaan', 'Pertanyaan : ') !!}
	<textarea name='pertanyaan' placeholder=' pertanyaan...' id='pertanyaan' class='form-control'>{!! $polling->pertanyaan !!}</textarea>
</div>



 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">


$('#pesan').click(function(){
	$('#pesan').fadeOut('slow', function(){
		$('#pesan').html('').show().removeClass('alert alert-danger animated shake');
	});
});



$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
judul = $('#judul').val();
pertanyaan = $('#pertanyaan').val();
  

form_data ={
	pertanyaan : pertanyaan,
	judul : judul,
	id : '{!! $polling->id !!}',
  	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("admin_polling.update_pertanyaan") }}',
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
