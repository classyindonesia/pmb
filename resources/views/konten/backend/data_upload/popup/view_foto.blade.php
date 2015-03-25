@if(file_exists(public_path('/upload/foto/'.$foto->nama_file_tersimpan)))
	<img  src="/upload/foto/{!! $foto->nama_file_tersimpan !!}" \>
@else
	<div class='alert alert-danger'>
	Foto tidak ditemukan
	</div>
@endif