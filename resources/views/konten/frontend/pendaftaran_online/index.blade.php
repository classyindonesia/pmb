@extends('layouts.frontend')

@section('konten_utama')

<h1>Pendaftaran Online | Universitas Nusantara PGRI KEDIRI</h1>
<hr>

<div id='konten'>
	@include('konten.frontend.pendaftaran_online.check_pin')
</div>

@include('konten.frontend.pendaftaran_online.script')





@endsection