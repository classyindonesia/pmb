<h1>Foto & Berkas Camaba</h1>
<hr>

<table class="table">
<tr>
	<td width="20%">
		Nama
	</td>
	<td>
		{!! $biodata->nama !!}
	</td>
</tr>

<tr>
	<td>
		No Pendaftaran
	</td>
	<td>
		{!! $biodata->no_pendaftaran !!}
	</td>
</tr>
</table>

<table width="100%">
	<tr>
		<td width="40%">
	<hr style="margin:3px;border : 2px solid #aaa;">			
				<h2>Foto</h2>
 				@if(count($biodata->mst_photo)>0)
					<img width="200px;" src="/upload/foto/{!! $biodata->mst_photo->nama_file_tersimpan !!}">
				@else
					<div class="col-md-1 alert alert-danger"> <i class='fa fa-times'></i> foto masih kosong</div>
				@endif


		</td>
</tr>
<tr>
	<td>
	<hr style="margin:3px;border : 2px solid #aaa;">
		<h2>Berkas</h2>
		

		@if(count($biodata->mst_berkas)>0)
			@foreach($biodata->mst_berkas as $list)
				@if($list->ref_jenis_berkas_id == 1)
					<b>Ijazah : </b>
					<img width="200px;" src="/upload/berkas/ijazah/{!! $list->nama_file_asli !!}">
				@else
					<b>Surat Keterangan Kelulusan : </b>
					<img width="200px;" src="/upload/berkas/surat_keterangan_lulus/{!! $list->nama_file_asli !!}">					
				@endif
			@endforeach
		@else
			<div class="col-md-1 alert alert-danger"> <i class='fa fa-times'></i> foto masih kosong</div>
		@endif			
	</td>
</tr>

</table>

