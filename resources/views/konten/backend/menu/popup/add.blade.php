<h3>
	<i class="fa fa-plus-square"></i> Tambah Menu 
</h3>
<hr>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			 {!! Form::label('nama', 'Nama Menu : ') !!}
			 {!! Form::text('nama', '', ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'nama menu...']) !!}
		</div>

		<div class="form-group">
			 {!! Form::label('link', 'Link/URL/URI : ') !!}
			 {!! Form::text('link', '', ['class' => 'form-control', 'id' => 'link', 'placeholder' => 'link menu...']) !!}
		</div>		
	</div>


	<div class="col-md-6">
		<div class="form-group">
			 {!! Form::label('is_internal', 'Type : ') !!}
			 {!! Form::select('is_internal', 
			 		['1' => 'internal', '0' => 'external'], 
			 		1,
			 		['class' => 'form-control', 'id' => 'is_internal']
			 ) !!}
		</div>	
		<div class="form-group">
			 {!! Form::label('parent_id', 'Parent Menu : ') !!}
			 {!! Form::select('parent_id', 
			 		$parent_menu, 
			 		'',
			 		['class' => 'form-control', 'id' => 'parent_id']
			 ) !!}
		</div>	

	</div>

	<div class="col-md-12">
		<button id='simpan' class='btn btn-info pull-right '><i class='fa fa-floppy-o'></i> SIMPAN</button>
	</div>

</div>




<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');


form_data ={
	nama : $('#nama').val(),
	link : $('#link').val(),
	is_internal : $('#is_internal').val(),
	parent_id	 : $('#parent_id').val(),
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ route("backend.menu.insert") }}',
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


