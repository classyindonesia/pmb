@extends('layouts.backend')

@section('judul_header')
	@include($base_view.'komponen.tombol_add')
   <h1 class="title_header"><i class='fa fa-th-list'></i>  Daftar Kota </h1>
@endsection



@section('konten_utama')
@include($base_view_biodata.'komponen.nav_atas')



	@include($base_view.'list_data')



@endsection

