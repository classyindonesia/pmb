@extends('layouts.backend')
 

@section('judul_header')
  <h1 class="title_header"> Dashboard </h1>
@endsection

@section('konten_utama')

  @include($base_view.'web.list_data')





@endsection
