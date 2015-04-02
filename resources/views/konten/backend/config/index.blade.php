@extends('layouts.backend')

@section('judul_header')
  <h1 class="title_header"> <i class='fa fa-wrench'></i>  Config  </h1>
@endsection




@section('script_tambahan')
  <script src="/js/plugins/jscolor/jscolor.js"></script> 
@endsection

@section('konten_utama')

@include($base_view.'list_data')



@endsection



