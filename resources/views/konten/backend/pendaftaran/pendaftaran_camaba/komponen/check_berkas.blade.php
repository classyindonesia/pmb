@if(count($list->mst_berkas)>0)

	@foreach($list->mst_berkas as $list_berkas)

			@if($list_berkas->ref_jenis_berkas_id == 1)
				@if(file_exists(public_path('upload/berkas/ijazah/'.$list_berkas->nama_file_asli)))
				<span class='text-success'  data-toggle='tooltip' title='berkas sudah ada'>
						<i class='fa fa-check ' ></i> OK
				</span>
				@else
					<i data-toggle='tooltip' title='file tdk ditemukan' class='text-warning fa fa-times'></i>
				@endif
			@else
				@if(file_exists(public_path('upload/berkas/surat_keterangan_lulus/'.$list_berkas->nama_file_asli)))
				<span class='text-success'  data-toggle='tooltip' title='berkas sudah ada'>
						<i class='fa fa-check ' ></i> OK
				</span>
				@else
					<i data-toggle='tooltip' title='file tdk ditemukan' class='text-warning fa fa-times'></i>
				@endif
			@endif

	@endforeach



@else
	<i class='fa fa-times text-danger' data-toggle='tooltip' title='belum upload berkas'></i>
@endif