@extends('layouts.backend')


@section('judul_header')
   <h1 class="title_header"><i class="fa fa-check-circle-o"></i>  Validasi Biodata </h1>
@endsection


@section('konten_utama')


<div class="row">
	<div class="col-md-6">
		@include($base_view.'komponen.form1')
	</div>
	<div class="col-md-6">
		@include($base_view.'komponen.form1')
	</div>
</div>		




@endsection

