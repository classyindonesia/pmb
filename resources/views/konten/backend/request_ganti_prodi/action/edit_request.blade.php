<i class='fa fa-cogs' data-toggle='tooltip' title='rubah status' style='cursor:pointer;' id='action{!! $list->id !!}'></i>


<script>
$('#action{!! $list->id !!}').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("request_pergantian_prodi.popup_request", $list->id) !!}')
})
</script>