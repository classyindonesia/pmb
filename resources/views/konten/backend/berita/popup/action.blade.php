
<i class='fa fa-times' style='cursor:pointer;' id='del{{ $list->id }}'></i>
<script type="text/javascript">
$('#del{{ $list->id }}').click(function(){
	setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{{ URL::route("admin_berita.del_lampiran") }}',
			data : {id : '{{ $list->id }}', _token : '{!! csrf_token() !!}'},
			type : 'post',
			error: function(err){
				alert('error! terjadi sesuatu pada sisi server!');
			},
			success:function(ok){
				$('.modal-body').load('{!! URL::route("admin_berita.add_lampiran", Request::segment(3)) !!}');			
			}
		})
	}
})
</script>
