<h1> Request Pergantian Prodi </h1>
 

<table class="table">
<tr>
	<td width="20%">
		Prodi saat ini [1]
	</td>
	<td>
	@if(count($b->ref_prodi1)>0)
		{!! $b->ref_prodi1->nama !!}
	@else
		-
	@endif
	</td>
</tr>
<tr>
	<td>
		Prodi saat ini [2]
	</td>
	<td>
	@if(count($b->ref_prodi2)>0)
		{!! $b->ref_prodi2->nama !!}
	@else
		-
	@endif
	</td>
</tr>


</table>

<hr>
<table width="100%">
	<tr>
		<td width="30%">
			Request Pergantian Prodi 1
		</td>
		<td>
			{!! Form::select('ref_prodi_id1',  $prodi, $b->ref_prodi_id1, ['id' => 'ref_prodi_id1', 'class' => 'form-control']) !!}
		</td>
		<td>
			<button class="btn btn-primary" id="do_request_prodi1">Submit</button>
		</td>
	</tr>



	<tr>
		<td width="30%">
			Request Pergantian Prodi 2
		</td>
		<td>
			{!! Form::select('ref_prodi_id2',  $prodi, $b->ref_prodi_id2, ['id' => 'ref_prodi_id2', 'class' => 'form-control']) !!}
		</td>
		<td>
			<button class="btn btn-primary" id="do_request_prodi2">Submit</button>
		</td>
	</tr>

</table>


<script type="text/javascript">
	$('#do_request_prodi1').click(function(){
		setuju = confirm('are you sure?');
		if(setuju == true){
			ref_prodi_id1 = $('#ref_prodi_id1').val();
			/*
			if(ref_prodi_id1 == '{!! $b->ref_prodi_id1 !!}' || ref_prodi_id1 == ''){
				alert('prodi pilihan tidak boleh sama atau kosong!');
				return false;
			}
			*/

			$.ajax({
				url : '{!! route("ganti_prodi.submit_request") !!}',
				data : {ref_prodi_id : ref_prodi_id1, prodi_pilihan : 1},
				type : 'post',
				error:function(err){
					alert('error! terjadi kesalahan pada sisi server!');
				},
				success:function(ok){
					if(ok == 1){						
						alert('anda sudah pernah melakukan request pergantian, silahkan menunggu persetujuan');
					}
					else{
						$('.modal-body').load('{!! route("ganti_prodi.index") !!}');
					}
				}
			})			
		}
	});



	$('#do_request_prodi2').click(function(){
		ref_prodi_id2 = $('#ref_prodi_id2').val();
			if(ref_prodi_id2 == ''){
				return false;
			}


		setuju = confirm('are you sure?');
		if(setuju == true){
			

 

			$.ajax({
				url : '{!! route("ganti_prodi.submit_request") !!}',
				data : {ref_prodi_id : ref_prodi_id2, prodi_pilihan : 2},
				type : 'post',
				error:function(err){
					alert('error! terjadi kesalahan pada sisi server!');
				},
				success:function(ok){
					if(ok == 1){						
						alert('anda sudah pernah melakukan request pergantian, silahkan menunggu persetujuan');
					}
					else{
						$('.modal-body').load('{!! route("ganti_prodi.index") !!}');
					}
				}
			})			
		}
	});

</script>
 


@if(count($request_ganti)>0)
	 <hr>

	 <h3>Request Status</h3>
	 <hr>

	 @foreach($request_ganti as $list)
	 <table class="table">
	 	<tr>
	 		<td>
	 			Prodi Pilihan ke
	 		</td>
	 		<td>
	 			{!! $list->prodi_pilihan !!} 			
	 		</td>
	 	</tr>	 
	 	<tr>
	 		<td width="30%">
	 			Pindah ke prodi  
	 		</td>
	 		<td>
				@if(count($list->ref_prodi)>0) {!! $list->ref_prodi->nama !!} @else - @endif
	 		</td>
	 	</tr>
	 	<tr>
	 		<td>
	 			Status
	 		</td>
	 		<td>
				@if($list->status == 0) 
	 				<span class='label label-warning'>menunggu persetujuan petugas...</span>
	 			@elseif($list->status == 1)
	 				<span class='label label-success'>telah disetujui</span>
				@elseif($list->status == 2)	 				
	 				<span class='label label-danger'>ditolak oleh petugas</span>
				@endif	 			
	 		</td>
	 	</tr>
	 </table>
 
	 	<hr style="margin-top:1px;">
	 @endforeach
@endif