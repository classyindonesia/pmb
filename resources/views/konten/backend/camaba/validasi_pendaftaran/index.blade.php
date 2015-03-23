@extends('layouts.backend')

@section('konten_utama')

@if($b->is_valid == 1)
	 <div class='col-md-12'>
		@include($base_view.'no_pendaftaran')
	 </div>
@endif
	 <div class='col-md-6'>
		@include($base_view.'biodata')
	 </div>
	 <div class='col-md-6'>
		@include($base_view.'data_akademik')
	 </div>


	 <div class='col-md-12'>
	<hr>
	 	 </div>

	 <div class='col-md-6'>
		@include($base_view.'foto')
	 </div>

	 <div class='col-md-6'>
		@include($base_view.'file_berkas')
	 </div>

	<div class='col-md-12'>
	<hr>
		@if($b->is_valid == 0)

			@if(
				$b->alamat == '' || 
				$b->tgl_lahir == '0000-00-00' || 
				$b->thn_lulus == 0 || 
				$b->ref_sma_id = 0 ||
				$b->no_ijazah == '' ||
				$b->tempat_lahir == '' ||
				count($f)	== 0 ||
				count($berkas) == 0 
			)
				<div class="alert alert-danger">
					<h3> <i class='fa fa-warning'></i> Proses Validasi tidak bisa dilakukan sebelum biodata terisi semua. </h3>
				</div>
			@else
				@include($base_view.'info')
				@include($base_view.'tombol_validasi')
			@endif

		@else
			<div class='alert alert-success'>
				<h1> <i class='fa fa-check'></i> data telah tervalidasi! </h1>
			</div>
		@endif
	</div>

@endsection



@section('judul_header')
   <h1 class="title_header"><i class='fa fa-check-circle-o'></i>  Validasi Pendaftaran </h1>
@endsection