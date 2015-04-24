<button class='btn btn-primary pull-right' id='import'>
	<i class='fa fa-cloud-upload'></i> import data
</button>
<script type="text/javascript">
$('#import').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("baa_tes_skill.import") }}');
})
</script>
