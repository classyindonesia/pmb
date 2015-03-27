@extends('layouts.backend')

 

@section('judul_header')	
 
@include('konten.backend.weblink.tombol_kategori')
@include('konten.backend.weblink.tombol_add')

 <h1 class='title_header '>Weblink  </h1>
<hr>
@stop



@section('konten_utama')  



@include('konten.backend.weblink.list_data')



@endsection



@section('title')
	 Daftar Weblink
@endsection