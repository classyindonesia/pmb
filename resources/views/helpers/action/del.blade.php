
<i data-toggle='tooltip' title='delete' class='{!! $icon !!}' style='cursor:pointer;' id='del{{ $id }}'></i>
 
<script type="text/javascript">
$('#del{{ $id }}').click(function(){
	setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{{ $route_or_url }}',
			data : {id : '{{ $id }}', _token : '{!! csrf_token() !!}'},
			type : 'post',
			error: function(err){
				alert('error! terjadi sesuatu pada sisi server!');
			},
			success:function(ok){
				window.location.reload();
			}
		})
	}
})
</script>
