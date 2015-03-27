@foreach($foto as $list)
	<div class="col-md-4" style="height:250px;width100%;overflow:hidden;">
		<img alt="Responsive image" class="img-thumbnail img-responsive"  style="width:400px;" src="/upload/gambar_slide_utama/{!! $list->nama_file_asli !!}">
	</div>	
@endforeach


{!! $foto->render() !!}