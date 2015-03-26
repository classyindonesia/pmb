<script>
function kirimSms(id_pendaftaran){

	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("admin_pendaftaran.kirim_sms", [null]) !!}/'+id_pendaftaran);

}
</script>