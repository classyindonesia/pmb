<h3>
	Tambah URL
</h3>
<hr>

<div class="row">
	<div class="col-md-12">
	<div id="pesan"></div>
		<div class="form-group">
			{!! Form::label('url', 'URL : ') !!}
			{!! Form::text('url', $slide->url, ['id' => 'url', 'class' => 'form-control', 'placeholder' => 'url...']) !!}
		</div>

		<button id='simpan' class='btn btn-info pull-right '><i class='fa fa-floppy-o'></i> SIMPAN</button>
		
	</div>
</div>




<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
url = $('#url').val();

form_data ={
	id : {!! $slide->id !!},
	url : url,
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ route("foto_slide_utama.insert_url") }}',
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



$('#pesan').click(function(){
	$('#pesan').fadeOut(function(){
		$('#pesan').html('').show().removeClass('alert alert-danger');
	});
})

</script>


