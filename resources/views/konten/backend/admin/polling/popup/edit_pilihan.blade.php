<h1> Tambahkan Pilihan </h1>
<hr>


 <div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('pilihan', 'Nama Pilihan/ Jawaban pertanyaan: ') !!}
	<input type='text' name='pilihan' value="{!! $pilihan->pilihan !!}" placeholder='Nama pilihan...' id='pilihan' class='form-control'>
</div>

  

 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
 	<button id='cancel' class='btn btn-danger'><i class='fa fa-times'></i> cancel</button>
</div>



<script type="text/javascript">



$('#cancel').click(function(){
	$('.modal-body').load('{!! route("admin_polling.pilihan", Request::segment(4)) !!}');
});

$('#pesan').click(function(){
	$('#pesan').fadeOut('slow', function(){
		$('#pesan').html('').show().removeClass('alert alert-danger animated shake');
	});
});



$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
pilihan = $('#pilihan').val();
   

form_data ={
	id : {!! $pilihan->id !!},
	mst_pertanyaan_polling_id : {!! Request::segment(4) !!},
	pilihan : pilihan,
  	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("admin_polling.update_pilihan") }}',
		data : form_data,
		type : 'post',
		error:function(xhr, status, error){
			$('#simpan').removeAttr('disabled');

	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });
		},
		success:function(ok){
			$('.modal-body').load('{!! route("admin_polling.pilihan", Request::segment(4)) !!}');
		}
	})
})
</script>
