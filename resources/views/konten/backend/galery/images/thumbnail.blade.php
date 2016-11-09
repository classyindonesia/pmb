 
<div style="height:260px;overflow:hidden">
		<button id="deleteImage{!! $list->id !!}" class="btn btn-danger center-block">
			del
		</button>
	@if(!file_exists(public_path('upload/galery/'.$list->nama_file)))
		<img style="cursor:pointer;" data-src="holder.js/300x200?text=file \n tidak ditemukan" class="img-responsive" alt="Image" >
	@else
		<img style="cursor:pointer;" id="show-image{!! $list->id !!}" src="/upload/galery/thumbnail_{!! $list->nama_file !!}" class="img-responsive center-block" alt="Image" >
	@endif
		<script type="text/javascript">
			$('#deleteImage{!! $list->id !!}').click(function(){
				setuju = confirm('are you sure?');
				if(setuju == true){

					$.ajax({
						url : '{!! route("backend.galery.delete_image") !!}',
						data : { id : {{ $list->id }}, _token : '{!! csrf_token() !!}' },
						type : 'post',
						error: function(err){
							alert('terjadi kesalahan pada sisi server!');
						},
						success : function(ok){
							window.location.reload();
						}
					})
				}
			});
		</script>

</div>

<script type="text/javascript">
	$('#show-image{!! $list->id !!}').click(function(){
		$('#myModal').modal('show');
		var img_path = '{!! Request::root() !!}/upload/galery/{!! $list->nama_file !!}';
		$('.modal-body').html('<img src="'+img_path+'" class="img-responsive center-block">');
	});
</script>