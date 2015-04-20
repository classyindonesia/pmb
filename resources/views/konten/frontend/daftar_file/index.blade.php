@extends('layouts.frontend')

 
@section('konten_utama')
<div class="col-md-9">
	<h2>Daftar File Lampiran Berita</h2>
	<hr>
	@include($base_view.'komponen.breadcrumb')
	@include($base_view.'form_pencarian')
	@include($base_view.'list_data')

</div>
@endsection




@section('sidebar')
	<div class="col-md-3">
		@include('layouts.komponen.frontend.sidebar')
	</div>
@endsection
 