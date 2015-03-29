<h2>Kirim SMS</h2>

<hr>

<table class="table">
<tr>
	<td width="30%">
		Nomor Pendaftaran
	</td>
	<td>
		{!! $pendaftaran->no_pendaftaran !!}
	</td>
</tr>

<tr>
	<td>
		Nama 
	</td>
	<td>
		{!! $pendaftaran->nama !!}
	</td>
</tr>

<tr>
	<td>
		Nomor HP 
	</td>
	<td>
		{!! $pendaftaran->no_hp !!}
	</td>
</tr>



</table>

<hr>

<textarea style=" height:80px;" placeholder='isi pesan sms...' id='pesan_sms' class="form-control"></textarea>
<hr>

<button style="font-size:30px;height:80px;" class="btn btn-info form-control" id='kirim'> 
	<i class='fa fa-check'></i> KIRIM
</button>

<script>
$('#kirim').click(function(){
	pesan_sms = $.trim($('#pesan_sms').val());
	if(pesan_sms == ''){
		return false;
	}
form_data={
	id : '{!!  Request::segment(4) !!}',
	no_hp : '{!! $pendaftaran->no_hp !!}',
	no_pendaftaran : '{!! $pendaftaran->no_pendaftaran !!}',
	pesan : pesan_sms
}	

$('#kirim').attr('disabled', 'disabled');
$.ajax({
	url : '{!! route("admin_data_pendaftaran.do_kirim_sms") !!}',
	type : 'post',
	data : form_data,
	error:function(err){
		alert('error! terjadi kesalahan pada sisi server!');
		$('#kirim').removeAttr('disabled');
	},
	success:function(ok){
		alert('pesan telah terkirim');
		$('#kirim').removeAttr('disabled');
		window.location.reload();
	}
})


})
</script>