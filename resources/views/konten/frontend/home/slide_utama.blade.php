<div class="slideshow">

	@foreach($foto_slide_utama as $list)	

	<div style="height:400px; width:100%;overflow:hidden;">

		@if($list->url != '')
			<a target="__blank" href="{!! $list->url !!}">
				<img class="img-responsive img-rounded" alt="Responsive image" src="/upload/gambar_slide_utama/{!! $list->nama_file_asli !!}" />
			</a>
		@else
			<img class="img-responsive img-rounded" alt="Responsive image" src="/upload/gambar_slide_utama/{!! $list->nama_file_asli !!}" />
		@endif
		
	</div>
	
	@endforeach

</div>
