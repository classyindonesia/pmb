<script>
function viewBerkas(id_berkas){
	$('#myModal').modal('show');

	$('.modal-body').load('{!! route("data_upload.view_berkas", [null]) !!}/'+id_berkas);

}
</script>