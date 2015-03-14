<h1>Edit Pengguna</h1>
<hr style='margin:2px;'>



<div id='pesan'></div>

<div class='col-md-12' style='padding:0px;'>
		<div class='form-group'>
		{!! Form::label('nama', 'Nama Pengguna : ') !!}
		<input type='text' name='nama' value='{!! $user->nama !!}' placeholder='nama Pengguna...' id='nama' class='form-control'>
	</div>
	<div class='form-group'>
		{!! Form::label('email', 'Email : ') !!}
		<input type='text' name='email' value='{!! $user->email !!}' placeholder='Email...' id='email' class='form-control'>
	</div>	
	<div class='form-group'>
		{!! Form::label('ref_user_level_id', 'Level Pengguna : ') !!}
		{!! Form::select('ref_user_level_id', Fungsi::get_dropdown($level, 'level'), $user->ref_user_level_id, ['id' => 'ref_user_level_id']) !!}
	</div>	 
</div>


 
  	 <div class='form-group' style='margin-top: 3em;'>
	 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
	</div>
 

<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
email = $('#email').val();
ref_user_level_id = $('#ref_user_level_id').val();
password = $('#password').val();
password_confirmation = $('#password_confirmation').val();
 

form_data ={
	nama : nama,
	email : email,
	id : '{!! $user->id !!}',
	ref_user_level_id : ref_user_level_id,
   	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("admin_users.update") }}',
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
