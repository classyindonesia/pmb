@extends('layouts.backend')

@section('judul_header')
  <h1 class="title_header"> <i class='fa fa-qrcode'></i>  Statistik PIN Pendaftaran  </h1>
@endsection

 

@section('konten_utama')
	 @include('konten.backend.pin.komponen.nav_atas')

<hr>

<table width='40%' style='font-size:16px;font-weight:bold;'>
	<tr>
		<td>Jumlah PIN Terpakai</td>
		<td width='30%'>{!! $jml_terpakai !!}</td>
	</tr>

	<tr>
		<td>Jumlah PIN Belum Terpakai</td>
		<td>{!! $jml_belum_dipakai !!}</td>
	</tr>

	<tr>
		<td>Jumlah PIN yg sdh diambil</td>
		<td>{!! $jml_diambil !!}</td>
	</tr>


	<tr>
		<td>Jumlah semua PIN</td>
		<td>{!! $jml_semua !!}</td>
	</tr>

</table>

@endsection



