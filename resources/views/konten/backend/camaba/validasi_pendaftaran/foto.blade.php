<h1>Foto Pendaftaran</h1>
<hr>
@if(count($f)<=0)
	<div class='alert alert-danger'>
	 <i class='fa fa-warning'></i> Foto masih kosong
	</div>
@else
	@if(file_exists(public_path('/upload/foto/'.md5(Auth::user()->email).'.jpg')))
		<img style="width:200px;" src="/upload/foto/{!! md5(Auth::user()->email) !!}.jpg?{!! date('YmdHis') !!}" class='img-rounded   img-responsive'   alt="Responsive image">
	@else
		<div class='alert alert-danger'>
		 <i class='fa fa-warning'></i> Foto masih kosong
		</div>
	@endif
@endif