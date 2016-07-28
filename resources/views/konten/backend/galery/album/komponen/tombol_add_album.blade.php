
<button class='btn btn-primary pull-right' id='add_album'> 
	<i class='fa fa-plus-square'></i> create album
</button>
<script type="text/javascript">
$('#add_album').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("backend.galery.add_album") }}');
})
</script>
