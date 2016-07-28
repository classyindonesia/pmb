<button id="upload{!! $list->id !!}" class="btn btn-info">
	<i class='fa fa-cloud-upload'></i> Upload
</button>

<script type="text/javascript">
	$('#upload{!! $list->id !!}').click(function(){
		$('#myModal').modal('show');
		$('.modal-body').load('{!! route("backend.galery.upload_gambar", $list->id) !!}')
	});
</script>