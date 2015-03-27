<script>
function viewDetail(id_gelombang){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("admin_dashboard.view_statistik", [null]) !!}/'+id_gelombang);
 }
</script>