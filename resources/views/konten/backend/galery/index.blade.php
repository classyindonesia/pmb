@extends('layouts.backend')

@section('judul_header')
	@include($base_view.'komponen.tombol_add_album')
   <h1 class="title_header"><i class='fa fa-image'></i>  Galery </h1>
@endsection


@section('konten_utama')
<script src="/js/plugins/holderjs/holder.js"></script>
	

	@include($base_view.'list_data')

@endsection

 