<div style="height:200px;overflow:hidden">
	@if(count($list->mst_galery)<=0)
		<a href="{!! route('backend.galery.images', $list->id) !!}">
			<img data-src="holder.js/300x200?text=album \n masih kosong" class="img-responsive" alt="Image" >
		</a>
	@else
		@php($thumb=$list->mst_galery()->orderBy('id', 'DESC')->first())
		<a href="{!! route('backend.galery.images', $list->id) !!}">
			@if(file_exists(public_path('upload/galery/thumbnail_'.$thumb->nama_file)))
				<img src="/upload/galery/thumbnail_{!! $thumb->nama_file !!}" class="img-responsive" alt="Image" >
			@else
				<img data-src="holder.js/300x200?text=file image \n tdk ditemukan" class="img-responsive" alt="Image" >
			@endif
		</a>
	@endif
</div>
