<div class="slideshow">

	@foreach($foto_slide_utama as $list)	

	<div style="height:400px; width:100%;overflow:hidden;">
		<img class="img-responsive" alt="Responsive image img-thumbnail" src="/upload/gambar_slide_utama/{!! $list->nama_file_asli !!}" />
		
	</div>
	
	@endforeach

</div>