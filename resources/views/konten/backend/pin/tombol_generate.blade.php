
<button class='btn btn-primary pull-right' id='add'> <i class='fa fa-plus-square'></i> Generate</button>
<script type="text/javascript">
$('#add').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("admin_pin.generate") }}');
})
</script>
