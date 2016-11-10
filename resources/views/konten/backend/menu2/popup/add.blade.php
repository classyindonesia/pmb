<script type="text/javascript">
	$(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>

<h3>
	<i class="fa fa-plus-square"></i> Add new Menu
</h3>
<hr>

<div class="row">
	<div id="pesan" class="col-md-12"></div>
	<div class="col-md-6">		

		<div class="form-group">
			{!! Form::label('nama', 'Nama Menu : ') !!}
			{!! Form::text('nama', '', ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'nama menu...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('url', 'URL : ') !!}
			{!! Form::text('url', '', ['class' => 'form-control', 'id' => 'url', 'placeholder' => 'url...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('icon', 'Icon class : ') !!}
				<i class="fa fa-question-circle" data-toggle='tooltip' title="class dari font awesome "></i>
			{!! Form::text('icon', '', ['class' => 'form-control', 'id' => 'icon', 'placeholder' => 'icon class...']) !!}
		</div> 

	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('kode_warna', 'Nama Menu : ') !!}
			{!! Form::color('kode_warna', '', ['class' => 'form-control', 'id' => 'kode_warna' ]) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('keterangan', 'Keterangan Menu : ') !!}
			{!! Form::text('keterangan', '', ['class' => 'form-control', 'id' => 'keterangan', 'placeholder' => 'keterangan menu...']) !!}
		</div>

	</div>
	<div class="col-md-12">
		<button id='simpan' class='btn btn-info pull-right'><i class='fa fa-floppy-o'></i> SIMPAN</button>
	</div>
</div>




<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');

form_data ={
	nama : $('#nama').val(),
	icon : $('#icon').val(),
	url : $('#url').val(),
	kode_warna : $('#kode_warna').val(),
	keterangan : $('#keterangan').val(),
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ route("backend.menu2.insert") }}',
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
			alert('saved');
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


