 
<div style="height:200px;overflow:hidden">

	@if(!file_exists(public_path('upload/galery/'.$list->nama_file)))
		<img style="cursor:pointer;" data-src="holder.js/300x200?text=file \n tidak ditemukan" class="img-responsive" alt="Image" >
	@else
		<img style="cursor:pointer;" id="show-image{!! $list->id !!}" src="/upload/galery/thumbnail_{!! $list->nama_file !!}" class="img-responsive" alt="Image" >
	@endif
</div>

<script type="text/javascript">
	$('#show-image{!! $list->id !!}').click(function(){
		$('#myModal').modal('show');
		var img_path = '{!! Request::root() !!}/upload/galery/{!! $list->nama_file !!}';
		$('.modal-body').html('<img src="'+img_path+'" class="img-responsive center-block">');
	});
</script>