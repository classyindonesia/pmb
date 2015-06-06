@if(file_exists(public_path('/upload/foto/'.$foto->nama_file_tersimpan)))
	<img class="img-responsive" src="/upload/foto/{!! $foto->nama_file_tersimpan.'?'.date('YmdHis') !!}" \>
@else
	<div class='alert alert-danger'>
	Foto tidak ditemukan
	</div>
@endif