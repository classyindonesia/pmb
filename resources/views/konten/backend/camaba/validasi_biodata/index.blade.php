@extends('layouts.backend')


@section('judul_header')
	@include($base_view.'komponen.tombol_simpan')
	<br>
   <h1 class="title_header"><i class="fa fa-check-circle-o"></i>  Validasi Biodata </h1>
@endsection


@section('konten_utama')

	@if(count($biodata->mst_biodata)>0)
		@include($base_view.'form_edit')
	@else
		@include($base_view.'form_create')
	@endif


@endsection

