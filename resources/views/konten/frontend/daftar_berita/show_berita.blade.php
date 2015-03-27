@extends('layouts.frontend')





@section('konten_utama')
<div class="col-md-9">
 
 <a class="btn btn-primary pull-right" href="{!! route('daftar_berita.index') !!}">
	<i class='fa fa-arrow-left'></i> back
</a>

<h1>{!! $berita->judul !!}</h1>
<hr>
  {!! $berita->artikel !!}
 	
</div>
@endsection



@section('sidebar')
<div class="col-md-3">
@include('konten.frontend.auth.login')

</div>
@endsection

 