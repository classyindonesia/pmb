@extends('layouts.backend')

@section('judul_header')
	 @include('konten.backend.pin.tombol_generate')
	 @include('konten.backend.pin.tombol_create')

  <h1 class="title_header"> <i class='fa fa-qrcode'></i>  Data PIN Pendaftaran  </h1>
@endsection

 

@section('konten_utama')
	 @include('konten.backend.pin.komponen.nav_atas')

	 @include('konten.backend.pin.form_pencarian')
	 @include('konten.backend.pin.list_data')


@endsection



