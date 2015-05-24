<h4 style="margin-bottom:1px;">DATA IDENTITAS DIRI</h4>
<hr style="margin-top:1px;margin-bottom:1px;"> 



<table width="100%">
	<tr>
		<td width="30%">
	No. Pendaftaran			
		</td>
		<td>
			{!! $b->mst_pendaftaran->no_pendaftaran !!}
		</td>
	</tr>
	


	<tr>
		<td width="30%">
	Nama Lengkap		
		</td>
		<td>
			{!! $b->nama !!}
		</td>
	</tr>

	<tr>
		<td width="30%">
	Jenis Kelamin			
		</td>
		<td>
			@if($b->jenis_kelamin == 'L')
				Laki-laki
			@else
				Perempuan
			@endif
		</td>
	</tr>



	<tr>
		<td width="30%">
	Kelahiran			
		</td>
		<td>
		{!! $b->tempat_lahir !!}, 
		{!! Fungsi::date_to_tgl(date('Y-m-d', strtotime($b->tgl_lahir))) !!}
		</td>
	</tr>



	<tr>
		<td width="30%">
	Umur			
		</td>
		<td>
 			{!! Fungsi::umur(date('Y-m-d', strtotime($b->tgl_lahir))) !!} tahun (per 1 agustus {!! date('Y') !!} )
		</td>
	</tr>



	<tr>
		<td width="30%">
	Agama			
		</td>
		<td>
			@if(count($b->ref_agama)>0)
				{!! $b->ref_agama->nama !!}
			@else
				-
			@endif
		</td>
	</tr>



	<tr>
		<td width="30%">
	Alamat Kos/ Tempat tinggal			
		</td>
		<td>
			{!! $b->alamat !!}
		</td>
	</tr>


	<tr>
		<td width="30%">
	Kota			
		</td>
		<td>
			@if(count($b->ref_kota)>0)
				{!! $b->ref_kota->nama !!}
			@else
				-
			@endif
		</td>
	</tr>




	<tr>
		<td width="30%">
	Identitas Diri			
		</td>
		<td>
			@if(count($b->ref_identitas)>0)
				{!! $b->ref_identitas->nama !!}
			@else
				-
			@endif
			/ {!! $b->no_identitas !!}
		</td>
	</tr>



	<tr>
		<td width="30%">
	Email			
		</td>
		<td>  {!! $b->alamat_email !!}
		</td>
	</tr>


	<tr>
		<td width="30%">
	Ukuran Almamater			
		</td>
		<td>
			@if(count($b->ref_ukuran_almamater)>0)
				{!! $b->ref_ukuran_almamater->nama !!}
			@else
				-
			@endif
			 
		</td>
	</tr>




</table>

