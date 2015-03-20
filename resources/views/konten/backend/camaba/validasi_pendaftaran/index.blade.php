@extends('layouts.backend')

@section('konten_utama')

 <div class='col-md-6'>
	@include($base_view.'biodata')
 </div>
 <div class='col-md-6'>
	@include($base_view.'data_akademik')
 </div>

<div class='col-md-12'>
	@include($base_view.'info')
	@include($base_view.'tombol_validasi')
 </div>

@endsection



@section('judul_header')
   <h1 class="title_header"><i class='fa fa-check-circle-o'></i>  Validasi Pendaftaran </h1>
@endsection