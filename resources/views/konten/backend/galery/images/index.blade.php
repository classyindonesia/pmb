@extends('layouts.backend')

@section('judul_header')
	<a class="btn btn-info pull-right" href="{!! route('backend.galery.index') !!}"> <i class="fa fa-arrow-left"></i> back</a>
   <h1 class="title_header"><i class='fa fa-image'></i> Album Galery - Images </h1>
@endsection


@section('konten_utama')
	

	@include($base_view.'images.list_data')

@endsection

 