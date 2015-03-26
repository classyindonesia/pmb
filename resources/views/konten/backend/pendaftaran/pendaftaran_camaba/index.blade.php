@extends('layouts.backend')

@section('judul_header')
   <h1 class="title_header"><i class='fa fa-group'></i>  Pendaftaran Calon Mahasiswa Baru </h1>
@endsection



@section('konten_utama')
	@include($base_view.'komponen.form_pencarian')

	@include($base_view.'komponen.nav_atas')

	@include($base_view.'script')
	@include($base_view.'list_data')
@endsection


