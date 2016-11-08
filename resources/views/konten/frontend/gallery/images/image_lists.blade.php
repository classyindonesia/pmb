<div class="row">
@php($p = $album_gallery->mst_galery()->orderBy('id', 'DESC')->paginate(9) )
	@foreach($p as $list)
	  <div class="col-xs-6 col-md-4">
	    <div style='cursor:pointer;' class="thumbnail">
		    @php($path ='/upload/galery/thumbnail_'.$list->nama_file )
			@if(file_exists(public_path($path)))
			    <img id="view_foto{!! $list->id !!}" src="{!! $path !!}" class="img-responsive">

	 		<script type="text/javascript">
	 		$('#view_foto{!! $list->id !!}').click(function(){
	 			$('#myModal').modal('show');
	 			$('.modal-body').html('<img src="/upload/galery/{!! $list->nama_file !!}" class="img-responsive thumbnail center-block">')
	 		});
	 		</script>

			@else 
			    <img class="img-responsive" src="holder.js/300x254?text= file tdk terbaca atau terhapus">
			@endif  

	    </div>
	  </div>
	@endforeach

	{!! $p->render() !!}

</div>

