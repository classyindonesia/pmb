<i style='cursor:pointer;' id='detail{!!$list->id!!}' class='fa fa-eye'></i> 
<script type="text/javascript">
$('#detail{!!$list->id!!}').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("admin_api_call.detail", $list->id) }}');
})
</script>
