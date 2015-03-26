@extends('layouts.backend')
 
@section('judul_header')
  <h1 class="title_header"> <i class='fa fa-home'></i> Dashboard </h1>
@endsection


@section('konten_utama')

	<div class="col-md-6" style="padding-left: 0px;">
		@include($base_view.'operator.statistik_pendaftaran')		
	</div>
 

@endsection
