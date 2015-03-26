
<table class="table">
<tr>
	<td>
		Nomor PIN
	</td>
	<td>{!! $pin->pin !!}</td>
</tr>


<tr>
	<td>
		Status 
	</td>
	<td>
		@if($pin->status == 0)
			<span class='text-success'>belum terpakai</span>
		@else
			<span class='text-danger'>sudah terpakai</span>
		@endif
	</td>
</tr>

<tr>
	<td>
		Status  Pengambilan
	</td>
	<td>
		@if($pin->diambil == 0)
			<span class='text-success'>belum diambil</span>
		@else
			<span class='text-danger'>sudah diambil</span>
		@endif
	</td>
</tr>

@if($pin->status == 1)
<tr>
	<td>
		Tanggal Pemakaian
	</td>
	<td> 
		{!! Fungsi::date_to_tgl($pin->tgl_pakai) !!}
	</td>
</tr>

@endif



@if(count($pin->mst_pengguna_pin)>0)
<tr>
	<td>
		pengguna Pin
	</td>
	<td> 
		 {!! $pin->mst_pengguna_pin->mst_pendaftaran->nama !!}
	</td>
</tr>
<tr>
	<td>
		Nomor Pendaftaran
	</td>
	<td> 
		 {!! $pin->mst_pengguna_pin->mst_pendaftaran->no_pendaftaran !!}
	</td>
</tr>
@endif

</table>