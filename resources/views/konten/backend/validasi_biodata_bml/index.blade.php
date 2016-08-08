@extends('layouts.backend')

@section('judul_header')
	@include($base_view.'komponen.tombol_export')
   <h1 class="title_header"><i class='fa fa-check-circle'></i>  Validasi Biodata </h1>
@endsection


@section('konten_utama')
	@include($base_view.'komponen.status_config')
	@include($base_view.'komponen.form_search')	
	<div class="row">
		<div class="col-md-12">				
			<hr>
		</div>		
	</div>
 	
	@include($base_view.'list_data')
 
@endsection

 