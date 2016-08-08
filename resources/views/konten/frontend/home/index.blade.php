@extends('layouts.frontend')


@section('meta_keywords') {!! env('JUDUL_HEADER_WEBSITE') !!} @endsection

@section('meta_description') {!! env('SUBJUDUL_HEADER_WEBSITE') !!} @endsection



@section('konten_utama')
	<div class="col-md-9">

	<?php $sv = new \App\Models\SetupVariable; ?>
	 @if($sv->get_val('show_slide_utama_public') == 1)
	      <div class="jumbotron" style="padding : 0px;">
				@include($base_view.'slide_utama')
	      </div> 
		<hr>
	@endif

		@include($base_view.'list_berita')	
	</div>
@endsection


 


@section('script_tambahan')
	<script type="text/javascript" src="/js/plugins/cycle/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
@endsection


@section('sidebar')
	<div class="col-md-3">
		@include('layouts.komponen.frontend.sidebar')
	</div>

	@if(App\Helpers\SetupVariable::get('show_statistik_frontend') == 1)
			<div class="row">
			 	<div class="col-md-12">
					@include($base_view.'statistik')		 		
			 	</div> 
		</div>
	@endif
	
@endsection