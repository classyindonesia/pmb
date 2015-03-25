@extends('layouts.backend')


@section('judul_header')
		@include($base_view.'action.ganti_prodi')
   <h1 class="title_header"><i class="fa fa-file-pdf-o"></i>  Kartu Pendaftaran </h1>
@endsection


@section('konten_utama')





	@if($b->is_valid == 1)
		<div class='alert alert-info'>
			Kartu Pendaftaran harap dibawa saat pelaksanaan test.
		</div>
	@else
	<div class="alert alert-danger">
		<h3> <i class='fa fa-warning'></i> Data Pendaftaran belum tervalidasi, 
			klik tombol <b>validasi</b> terlebih dahulu untuk mencetak nomor pendaftaran.		
		</h3>
	</div>

	@endif




	@if($b->is_valid == 1)
		
		<a class='btn btn-info' style='font-size:30px;' target="__blank" href="{!! route('kartu_pendaftaran.cetak') !!}"> 
			<i class='fa fa-print'></i> cetak kartu pendaftaran
		</a>

	@endif



@endsection


