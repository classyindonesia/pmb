@extends('layouts.frontend')

@section('konten_utama')
 
<h1>Pendaftaran Online | Universitas Nusantara PGRI KEDIRI</h1>
<hr>

@if($sv->get('config_pendaftaran_online') == 1)



	<div id='konten'>
		@include('konten.frontend.pendaftaran_online.check_pin')
	</div>
	@include('konten.frontend.pendaftaran_online.script')
@else
<div class="alert alert-danger">

<h1>Status Pendaftaran Online </h1>
 
<hr>

  <h3>Masih Ditutup !</h3>
</div>

@endif



@endsection