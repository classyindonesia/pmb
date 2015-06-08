@extends('layouts.backend')

@section('judul_header')
	@if(Auth::user()->ref_user_level_id == 1)
	 	@include($base_view.'komponen.tombol_add')
	 @endif
	 
   <h1 class="title_header"><i class='fa fa-pie-chart'></i>  Polling </h1>
@endsection



@section('konten_utama')

	@include($base_view.'list_data')


@endsection


