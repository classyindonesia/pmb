@if($berkas->ref_jenis_berkas_id == 1)
	@if(file_exists(public_path('/upload/berkas/ijazah/'.$berkas->nama_file_asli)))
		<img class="img-responsive" src="/upload/berkas/ijazah/{!! $berkas->nama_file_asli.'?'.date('YmdHis')  !!}" \>
	@else
		<div class='alert alert-danger'>
		Berkas tidak ditemukan
 		</div>
	@endif
@else
	@if(file_exists(public_path('/upload/berkas/surat_keterangan_lulus/'.$berkas->nama_file_asli)))
		<img class="img-responsive"  src="/upload/berkas/surat_keterangan_lulus/{!! $berkas->nama_file_asli.'?'.date('YmdHis')  !!}" \>
	@else
		<div class='alert alert-danger'>
		Berkas tidak ditemukan
		</div>
	@endif
@endif