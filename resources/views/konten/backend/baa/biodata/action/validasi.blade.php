@if(count($list->mst_biodata)>0)

	<i 
		data-toggle='tooltip'	
		id='validasi{!! $list->mst_biodata->id !!}'
			@if($list->mst_biodata->status == 0)
				title='validasi biodata'
				class='fa fa-check-circle-o pointer'
			@else
				title='batalkan validasi biodata'
				class='fa fa-times-circle-o pointer'
			@endif		

		
	>
	</i>

	<script type="text/javascript">
	$('#validasi{!! $list->mst_biodata->id !!}').click(function(){
		setuju = confirm('are you sure?');
		if(setuju == true){
			$.ajax({
				url : '{!! route("backend_biodata.validasi") !!}',
				type : 'post',
				data : {id : {!! $list->mst_biodata->id !!}, _token : '{!! csrf_token() !!}' },
				error:function(err){
					alert('error! terjadi kesalahan pada sisi server!');
				},
				success:function(ok){
					window.location.reload();
				}
			})
		}
	})
	</script>



@else
	<!-- blm ada isi di tabel biodata -->
	<i class='fa fa-check-circle-o text-danger'></i>

@endif