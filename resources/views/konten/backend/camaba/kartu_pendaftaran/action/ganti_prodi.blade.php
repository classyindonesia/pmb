<button class="btn btn-primary pull-right" id='ganti_prodi'>Request Pergantian prodi</button>

<script>
$('#ganti_prodi').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("ganti_prodi.index") !!}')
})
</script>