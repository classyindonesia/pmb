<script>
function kirimSms(id_pendaftaran){

	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("baa_data_pendaftaran.kirim_sms", [null]) !!}/'+id_pendaftaran);
}


function viewBiodata(id_pendaftaran){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("baa_data_pendaftaran.view_biodata", [null]) !!}/'+id_pendaftaran);	
}

function viewBerkas(id_pendaftaran){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("baa_data_pendaftaran.view_berkas", [null]) !!}/'+id_pendaftaran);	
}

 

 
</script>