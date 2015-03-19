<div class='col-md-12'>
<h3>Pengisian Biodata</h3>
<hr>
</div>

<div class='col-md-6'>
	<div class='form-group'>
		{!! Form::label('nama', 'Nama Lengkap : ') !!}
		<input type='text' name='nama' id='nama' class='form-control' placeholder='nama lengkap...' />
	</div>
	<div class='form-group'>
		{!! Form::label('no_hp', 'Nomor HP : ') !!}
		<input type='text' name='no_hp' id='no_hp' class='form-control' placeholder='Nomor HP...' />
	</div>
	<div class='form-group'>
		{!! Form::label('alamat_email', 'Alamat Email : ') !!}
		<input type='text' name='alamat_email' id='alamat_email' class='form-control' placeholder='Alamat Email...' />
	</div>
	<input type='hidden' id='pin' value='{!! Request::segment(3) !!}'>

	<button id='simpan' style='font-size:40px;height:100px;' class='btn btn-info form-control'> <i class='fa fa-floppy-o'></i> SIMPAN</button>


</div>

<div class='col-md-6'>
	<div class='alert alert-info'>
	<i class='fa fa-warning'></i> CATATAN : alamat email dan nomor HP harus valid dan masih aktif!
	</div>
</div>

 
 <script type="text/javascript">
$('#simpan').click(function(){

	$('#simpan').attr('disabled', 'disabled');	

		nama = $('#nama').val();
		alamat_email = $('#alamat_email').val();
		no_hp = $('#no_hp').val();
		pin = $('#pin').val();

	$.ajax({
		url  : '{!! route("pendaftaran_online.submit_pendaftaran") !!}',
		data : {nama : nama, pin :pin, alamat_email : alamat_email, no_hp : no_hp},
		type : 'post',
		error:function(xhr, status, error){
		$('#myModal').modal('show');
		$('.modal-body').html('<div id="pesan"></div>')
		$('#simpan').removeAttr('disabled');
	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });

		      //    alert('error! terjadi kesalahan pada sisi server!')
		},
		success:function(ok){
			$('#myModal').modal('show');
			$('.modal-body').html('<div class="alert alert-success"> <h1> Data telah tersimpan </h1><hr> proses selanjutnya, <br> silahkan periksa inbox email atau HP anda! </div>');

			$('#simpan').removeAttr('disabled');
			$('#myModal').on('hidden.bs.modal', function (e) {
				window.location.reload();
			});
		}
	});
});


 </script>