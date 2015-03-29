@if(count($list->mst_photo)>0)
	@if(file_exists(public_path('upload/foto/'.$list->mst_photo->nama_file_tersimpan)))
	<span class='text-success'  data-toggle='tooltip' title='foto sudah ada'>
			<i class='fa fa-check ' ></i> OK
	</span>
	@else
		<i data-toggle='tooltip' title='file tdk ditemukan' class='text-warning fa fa-times'></i>
	@endif
@else
	<i class='fa fa-times text-danger' data-toggle='tooltip' title='belum upload foto'></i>
@endif