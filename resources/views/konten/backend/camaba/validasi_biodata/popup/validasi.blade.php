<h1>Validasi Biodata</h1>
<hr>

@if($biodata->mst_biodata->status == 0)
	<div class="alert alert-info">
		setelah klik tombol validasi di bawah, maka data sudah tidak bisa dirubah.
	</div>


	<button class="btn btn-success form-control" id='do_validasi'>
		<i class='fa fa-check'></i> VALIDASI BIODATA
	</button>

	<script type="text/javascript">
	$('#do_validasi').click(function(){
		setuju = confirm('are you sure?');
		if(setuju == true){
			$.ajax({
				url : '{!! route("backend_validasi_biodata.do_validasi") !!}',
				data : {id : '{!! $biodata->mst_biodata->id !!}'},
				type : 'post',
				error:function(err){
					alert('error! terjadi kesalahan pada sisi server!');
				},
				success:function(ok){
					$('.modal-body').html('<h1 class="alert alert-success"> <i class="fa fa-check"></i> proses validasi telah berhasil</h1>');
					
					$('#myModal').on('hidden.bs.modal', function (e) {
						window.location.reload();
					});										
				}
			})
		}
	})
	</script>

@else
	
	<a 
		target="__blank" 
		class="btn btn-info form-control" 
		href="{!! route('backend_validasi_biodata.cetak') !!}"
	>
		<i class='fa fa-file-pdf-o'></i> Cetak Biodata
	</a>
	
@endif