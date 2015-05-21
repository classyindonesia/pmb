<i id='edit{!! $list->id !!}'  class='fa fa-pencil-square' style='cursor:pointer;' data-toggle='tooltip' title='edit'></i>
<script type="text/javascript">
$('#edit{!! $list->id !!}').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("backend_biodata.edit", $list->id) }}');
})
</script>
