@extends('layouts.backend')

@section('konten_utama')
@include('konten.backend.ref.komponen.nav_atas')

 @include('konten.backend.ref.ref_thn_ajaran.list_data')

@endsection



@section('judul_header')

 @include('konten.backend.ref.ref_thn_ajaran.tombol_create')

  <h1 class="title_header"> Tahun Ajaran </h1>
@endsection