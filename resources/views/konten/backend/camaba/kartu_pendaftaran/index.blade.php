@extends('layouts.backend')


@section('judul_header')
   <h1 class="title_header"><i class="fa fa-file-pdf-o"></i>  Kartu Pendaftaran </h1>
@endsection


@section('konten_utama')

<div class='alert alert-info'>
	@if($b->is_valid == 1)
		Kartu Pendaftaran harap dibawa saat pelaksanaan test.
	@else
		Data Pendaftaran belum tervalidasi, 
		klik tombol <b>validasi</b> terlebih dahulu untuk mencetak nomor pendaftaran.
	@endif
</div>



@if($b->is_valid == 1)
	
	<a class='btn btn-info' style='font-size:30px;' target="__blank" href="{!! route('kartu_pendaftaran.cetak') !!}"> 
		<i class='fa fa-print'></i> cetak kartu pendaftaran
	</a>

@endif



@endsection

