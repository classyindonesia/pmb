<i class='fa fa-th-list' id='list_skill{!! $list->id !!}' style='cursor:pointer;' data-toggle='tooltip' title='list skill'></i>

<script type="text/javascript">
	$('#list_skill{!! $list->id !!}').click(function(){
		$('#myModal').modal('show');
		$('.modal-body').load('{!! route("baa_tes_skill.list_skill", $list->id) !!}');
	})
</script>
