<button id="edit{!! $list->id !!}" class="btn btn-default">
	<i class='fa fa-pencil-square'></i> Edit
</button>

<script type="text/javascript">
	$('#edit{!! $list->id !!}').click(function(){
		$('#myModal').modal('show');
		$('.modal-body').load('{!! route("backend.galery.edit_album", $list->id) !!}')
	});
</script>