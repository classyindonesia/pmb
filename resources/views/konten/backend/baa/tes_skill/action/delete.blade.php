<i data-toggle='tooltip' title='hapus' class='fa fa-times' style='cursor:pointer;' id='del{{ $list->id }}'></i>
<script type="text/javascript">
$('#del{{ $list->id }}').click(function(){
	setuju = confirm('are you sure?');
	if(setuju == true){
		$.ajax({
			url : '{{ URL::route("baa_tes_skill.delete") }}',
			data : {id : '{{ $list->id }}'},
			type : 'post',
			error: function(err){
				alert('error! terjadi sesuatu pada sisi server!');
			},
			success:function(ok){
				$('.modal-body').load('{!! route("baa_tes_skill.list_skill", $list->mst_pendaftaran_id) !!}')
			}
		})
	}
})
</script>
