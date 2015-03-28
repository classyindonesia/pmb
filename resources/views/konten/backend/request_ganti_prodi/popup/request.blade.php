<h3>Request Pergantian Prodi</h3>
<hr>


<table class="table">
<tr>
	<td width="30%">
		Nama
	</td>
	<td>
	@if(count($data->mst_pendaftaran)>0)
		{!! $data->mst_pendaftaran->nama !!}
	@else
		-
	@endif
	</td>
</tr>


<tr>
	<td>
		No Pendaftaran
	</td>
	<td>
	@if(count($data->mst_pendaftaran)>0)
		{!! $data->mst_pendaftaran->no_pendaftaran !!}
	@else
		-
	@endif
	</td>
</tr>


<tr>
	<td>
		Prodi Pilihan ke
	</td>
	<td>
	{!! $data->prodi_pilihan !!}
	</td>
</tr>


<tr>
	<td>
		prodi Awal
	</td>
	<td>
	@if(count($data->ref_prodi_awal)>0)
		{!! $data->ref_prodi_awal->nama !!}
	@else
		-
	@endif
	</td>
</tr>



<tr>
	<td>
		Pindah ke
	</td>
	<td>
	@if(count($data->ref_prodi)>0)
		{!! $data->ref_prodi->nama !!}
	@else
		-
	@endif
	</td>
</tr>



</table>


<button id='setujui' class='btn btn-success'>
	<i class='fa fa-check'></i> setujui
</button>


<button id='tolak' class='btn btn-danger'>
	<i class='fa fa-times'></i> tolak
</button>

<script type="text/javascript">
	$('#setujui').click(function(){
		setujui = confirm('are you sure?');
		if(setujui == true){
			form_data = { 
				id : '{!! $data->id !!}', 
				status : 1, 
				prodi_pilihan : '{!! $data->prodi_pilihan !!}',
				mst_pendaftaran_id : '{!! $data->mst_pendaftaran_id !!}',
				ref_prodi_id : '{!! $data->ref_prodi_id !!}'
			}
			$.ajax({
				url :'{!! route("request_pergantian_prodi.submit_request") !!}',
				data : form_data,
				type : 'post',
				error: function(err){
					alert('error! terjadi kesalahan pada sisi server!');
				},
				success:function(ok){
					window.location.reload();
				}
			});

		}
	});


	$('#tolak').click(function(){
		setujui = confirm('are you sure?');
		if(setujui == true){
			form_data = { 
				id : '{!! $data->id !!}', 
				status : 2, 
				prodi_pilihan : '{!! $data->prodi_pilihan !!}',
				mst_pendaftaran_id : '{!! $data->mst_pendaftaran_id !!}',
				ref_prodi_id : '{!! $data->ref_prodi_id !!}'
			}
			$.ajax({
				url :'{!! route("request_pergantian_prodi.submit_request") !!}',
				data : form_data,
				type : 'post',
				error: function(err){
					alert('error! terjadi kesalahan pada sisi server!');
				},
				success:function(ok){
					window.location.reload();
				}
			});

		}
	});
</script>
