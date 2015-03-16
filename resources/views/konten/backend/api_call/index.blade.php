@extends('layouts.backend')

@section('konten_utama')
  @include('konten.backend.api_call.form_search')
  @include('konten.backend.api_call.list_data')
@endsection



@section('judul_header')
   <h1 class="title_header"><i class='fa fa-puzzle-piece'></i>  Api Call </h1>
@endsection