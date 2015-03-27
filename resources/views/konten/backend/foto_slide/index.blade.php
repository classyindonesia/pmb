@extends('layouts.backend')

 

@section('judul_header')	
 @include('konten.backend.foto_slide.komponen.tombol_add')
 @include('konten.backend.foto_slide.komponen.tombol_kelola_jabatan')

 <h1 class='title_header '>Foto Slider  </h1>
<hr>
@stop



@section('konten_utama') 

@include('konten.backend.foto_slide.list_data')



@endsection



@section('title')
	 Foto Slider
@endsection