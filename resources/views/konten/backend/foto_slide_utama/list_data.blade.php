@foreach($foto as $list)
	<div class="col-md-4" style="height:250px;width100%;overflow:hidden;">

		<i style='margin-bottom:-2em;font-size:30px;cursor:pointer;margin-right:1em;' onClick='addUrl({!! $list->id !!})' class='fa fa-link @if($list->url == "") text-warning @else text-success @endif pull-right'></i>

		<i style='margin-bottom:-2em;font-size:30px;cursor:pointer' onClick='delFoto({!! $list->id !!})' class='fa fa-times text-danger pull-right'></i>
		<img alt="Responsive image" class="img-thumbnail img-responsive"  style="width:400px;" src="/upload/gambar_slide_utama/{!! $list->nama_file_asli !!}">
	</div>	
@endforeach

 <div class="col-md-12">
{!! $foto->render() !!} 	
 </div>

