@extends('layouts.backend')





@section('judul_header')
  <h1 class="title_header"> <i class='fa fa-home'></i> Dashboard </h1>
@endsection


@section('konten_utama')
  @include($base_view.'baa.list_data')
@endsection