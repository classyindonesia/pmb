<script>
function viewFoto(id_foto){
	$('#myModal').modal('show');

	$('.modal-body').load('{!! route("data_upload.view_foto", [null]) !!}/'+id_foto);

}

function viewBerkas(id_foto){
	$('#myModal').modal('show');

	$('.modal-body').load('{!! route("data_upload.view_berkas", [null]) !!}/'+id_foto);

}
</script>