@extends('layouts.backend')

@section('judul_header')
	@include($base_view.'komponen.tombol_add')
	@include($base_view.'komponen.tombol_import')
   <h1 class="title_header"><i class='fa fa-newspaper-o'></i>  Pengumuman </h1>
@endsection



@section('konten_utama')
 	@include($base_view.'list_data')
@endsection


