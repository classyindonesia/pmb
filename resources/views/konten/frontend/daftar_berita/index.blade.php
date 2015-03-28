@extends('layouts.frontend')

 
@section('konten_utama')
<div class="col-md-9">
 
	@include($base_view.'list_berita')	
	<hr>


</div>
@endsection




@section('sidebar')
	<div class="col-md-3">
		@include('layouts.komponen.frontend.sidebar')
	</div>
@endsection
 