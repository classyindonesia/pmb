@extends('layouts.backend')

@section('judul_header')
	@include($base_view.'komponen.tombol_cetak')
	@include($base_view.'komponen.tombol_add')
	@include($base_view.'komponen.tombol_import')
   <h1 class="title_header"><i class='fa fa-connectdevelop'></i>  Tes Skill </h1>
@endsection



@section('konten_utama')
	@include($base_view.'komponen.form_search')
	@include($base_view.'komponen.nav_atas')

	@include($base_view.'list_data')


@endsection


