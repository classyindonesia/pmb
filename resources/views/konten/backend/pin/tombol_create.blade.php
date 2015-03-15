
<button class='btn btn-primary pull-right' id='create'> <i class='fa fa-plus-square'></i> Create PIN Manual</button>
<script type="text/javascript">
$('#create').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("admin_pin.create") }}');
})
</script>
