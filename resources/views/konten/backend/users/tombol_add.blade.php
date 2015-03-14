<button id='add' class='btn btn-primary pull-right'> <i class='fa fa-plus'></i> tambah pengguna</button>


<script type="text/javascript">
$('#add').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("admin_users.add") !!}')
})
</script>