@extends('layouts.backend')

@section('konten_utama')
@include('konten.backend.ref.komponen.nav_atas')

 @include('konten.backend.ref.ref_gelombang.list_data')

@endsection



@section('judul_header')

 @include('konten.backend.ref.ref_gelombang.tombol_create')

  <h1 class="title_header"> Daftar Sekolah SMA </h1>
@endsection