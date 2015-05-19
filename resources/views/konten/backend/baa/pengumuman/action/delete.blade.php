<i data-toggle='tooltip' title='hapus' class='fa fa-times' style='cursor:pointer;' id='del{{ $list->mst_pengumuman->id }}'></i>
<script type="text/javascript">
$('#del{{ $list->mst_pengumuman->id }}').click(function(){
	setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{{ URL::route("pengumuman.delete") }}',
			data : {id : '{{ $list->mst_pengumuman->id }}'},
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
