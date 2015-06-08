<i 
	class='fa fa-eye pointer'
	data-toggle='tooltip'
	title='view hasil polling'

	id='view_hasil{!! $list->id !!}'
> 
</i>

<script>
	$('#view_hasil{!! $list->id !!}').click(function(){
		$('#myModal').modal('show');
		$('.modal-body').load('{!! route("admin_polling.view_hasil", $list->id) !!}');
	})
</script>

