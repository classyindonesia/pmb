@if($list->ref_jenis_berkas_id == 1)
	@if(file_exists(public_path('/upload/berkas/ijazah/'.$list->nama_file_asli)))
					{!! Fungsi::size(
						File::size(public_path('upload/berkas/ijazah/'.$list->nama_file_asli))
						) !!}
	@else
		<span class='text-danger'>file tdk ditemukan</span> 
	@endif
@else
	@if(file_exists(public_path('/upload/berkas/surat_keterangan_lulus/'.$list->nama_file_asli)))
					{!! Fungsi::size(
						File::size(public_path('upload/berkas/surat_keterangan_lulus/'.$list->nama_file_asli))
						) !!}

	@else
			<span class='text-danger'>file tdk ditemukan</span> 
	@endif
@endif
