<i data-toggle='tooltip' title='edit' class='{!! $icon !!}' id='edit{{ $id }}' style='cursor:pointer;'></i>

<script type="text/javascript">
$('#edit{{ $id}}').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! $route_or_url !!}')

})
</script>

