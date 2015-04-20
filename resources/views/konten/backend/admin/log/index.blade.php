@extends('layouts.backend')

@section('judul_header')
 
   <h1 class="title_header"><i class='fa fa-user-secret'></i>  Logs </h1>
@endsection



@section('konten_utama')

	@include($base_view.'list_data')

@endsection


