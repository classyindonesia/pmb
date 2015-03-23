<h1>Foto Pendaftaran</h1>
<hr>
<img style="width:200px;" src="/upload/foto/{!! md5(Auth::user()->email) !!}.jpg?{!! date('YmdHis') !!}" class='img-rounded   img-responsive'   alt="Responsive image">