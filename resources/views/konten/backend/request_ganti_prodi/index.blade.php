@extends('layouts.backend')

@section('judul_header')
  <h1 class="title_header"> <i class='fa fa-random'></i>  Request Pindah Prodi  </h1>
@endsection

 

@section('konten_utama')
	@include($base_view.'list_data')

@endsection



