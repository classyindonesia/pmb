<h1> <i class='fa fa-user'></i> Biodata Camaba</h1>
<hr>


<div class="col-md-6" style="padding: 0px;">

	<table class="table">
	<tr>
		<td width="40%">
			Nomor Pendaftaran
		</td>
		<td>
			{!! $biodata->no_pendaftaran !!}
		</td>
	</tr>

	<tr>
		<td>
			Nama 
		</td>
		<td>
			{!! $biodata->nama !!}
		</td>
	</tr>
	<tr>
		<td>
			TTL 
		</td>
		<td>
			{!! $biodata->tempat_lahir.', '.Fungsi::date_to_tgl($biodata->tgl_lahir) !!}
		</td>
	</tr>
	<tr>
		<td>
			Nomor HP 
		</td>
		<td>
			{!! $biodata->no_hp !!}
		</td>
	</tr>
	<tr>
		<td>
			Alamat 
		</td>
		<td>
			{!! $biodata->alamat !!}
		</td>
	</tr>

	<tr>
		<td>
			Jenis Kelamin 
		</td>
		<td>
		@if($biodata->jenis_kelamin == 'L')
			Laki-laki
		@else
			Perempuan
		@endif
		</td>
	</tr>

	</table>
	
</div>



<div class="col-md-6">

	<table class="table">
	<tr>
		<td width="30%">
			Prodi Pilihan 1
		</td>
		<td>
			@if(count($biodata->ref_prodi1)>0)
				{!! $biodata->ref_prodi1->nama !!}
			@else
				-
			@endif
		</td>
	</tr>
	<tr>
		<td width="40%">
			Prodi Pilihan 2
		</td>
		<td>
			@if(count($biodata->ref_prodi2)>0)
				{!! $biodata->ref_prodi2->nama !!}
			@else
				-
			@endif
		</td>
	</tr>

	<tr>
		<td>
			Sekolah Asal
		</td>
		<td>
		@if(count($biodata->ref_sma)>0)
			{!! $biodata->ref_sma->nama !!}
		@else
			-
		@endif
		</td>
	</tr>

	<tr>
		<td>
			Jenis Pendaftaran
		</td>
		<td>
		@if($biodata->jenis_daftar == 1)
			<span class='label label-success'>online</span>
		@else
			<span class='label label-success'>offline</span>
		@endif
		</td>
	</tr>

	<tr>
		<td>
			Alamat Email
		</td>
		<td>
		{!! $biodata->alamat_email !!}
		</td>
	</tr>




	</table>
	
</div>
 







	<table class="table">
	<tr>
		<td width="40%">
			Status Validasi
		</td>
		<td>
		@if($biodata->is_valid == 1)
			<span class='text-success'><i class='fa fa-check'></i> sudah tervalidasi </span>
		@else
			<span class='text-danger'><i class='fa fa-times'></i> belum tervalidasi </span>
		@endif

		</td>
	</tr>

 


	</table>
 
