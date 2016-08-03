<div style="height:200px;overflow:hidden">
	@if(count($list->mst_galery)<=0)
		<a href="{!! route('backend.galery.images', $list->id) !!}">
			<img data-src="holder.js/300x200?text=album \n masih kosong" class="img-responsive" alt="Image" >
		</a>
	@else
		@php($thumb=$list->mst_galery()->orderBy('id', 'DESC')->first())
		<a href="{!! route('backend.galery.images', $list->id) !!}">
			<img src="/upload/galery/thumbnail_{!! $thumb->nama_file !!}" class="img-responsive" alt="Image" >
		</a>
	@endif
</div>
