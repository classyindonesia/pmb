
<button class='btn btn-primary pull-right' id='import'> 
	<i class='fa fa-cloud-upload'></i> Import Data
</button>
<script type="text/javascript">
$('#import').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("admin_data_pendaftaran.import_data_pendaftaran") }}');
})
</script>
