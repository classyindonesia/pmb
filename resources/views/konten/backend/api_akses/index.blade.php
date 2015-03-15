@extends('layouts.backend')

@section('konten_utama')
  @include('konten.backend.api_akses.list_data')
@endsection



@section('judul_header')
@include('konten.backend.api_akses.tombol_create')
  <h1 class="title_header"><i class='fa fa-lock'></i>  Api Akses </h1>
@endsection