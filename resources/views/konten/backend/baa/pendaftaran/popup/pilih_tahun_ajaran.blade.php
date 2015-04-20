<h1>Pilih tahun ajaran</h1>
<hr>

<script type="text/javascript">
	function set_thn_ajaran(ref_thn_ajaran_id){
		$.ajax({
			url : '{!! route("baa_data_pendaftaran.set_tahun_ajaran") !!}',
			data : {id : ref_thn_ajaran_id},
			type : 'post',
			error:function(err){
				alert('error! terjadi kesalahan pada sisi server!');
			},
			success:function(ok){
				window.location.reload();
			}
		})
	}	
</script>

@foreach($thn_ajaran as $list)
	
	<button onClick='set_thn_ajaran({!! $list->id !!})' style="margin:4px;" class="btn btn-primary" id='pilih{!! $list->id !!}'>
	@if(Session::get('ref_thn_ajaran_id') == $list->id)
		<i class='fa fa-check-square-o'></i>
	@else
		<i class='fa fa-square-o'></i>
	@endif
	{!! $list->nama !!}</button>

@endforeach