@extends('layouts.frontend')

 
@section('konten_utama')
	<div class="col-md-9">

	<a class="btn btn-primary pull-right" href="{!! route('frontend.gallery.index') !!}">
		<i class="fa fa-arrow-left"></i> Back
	</a>

		<h2> <i class="fa fa-image"></i> Album Gallery</h2>
		<hr>

<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="{!! route('frontend.gallery.index') !!}">Gallery</a></li>
  <li class="active">{{ $album_gallery->nama }}</li>
</ol>

 
		@include($base_view.'images.image_lists')

 

	</div>
@endsection




@section('sidebar')
	<div class="col-md-3">
		@include('layouts.komponen.frontend.sidebar')
	</div>
@endsection
 