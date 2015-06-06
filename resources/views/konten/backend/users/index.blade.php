@extends('layouts.backend')

@section('judul_header')
	@include('konten.backend.users.tombol_add')

	<h1 class="title_header"> Daftar Pengguna </h1>

@endsection




@section('konten_utama')
	@include('konten.backend.users.komponen.form_search')
	@include('konten.backend.users.list_data')


@endsection



