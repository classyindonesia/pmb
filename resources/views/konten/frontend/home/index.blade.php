@extends('layouts.frontend')





@section('konten_utama')
<div class="col-md-9">

      <div class="jumbotron" style="padding : 0px;">
			@include($base_view.'slide_utama')
      </div>



	<hr>
	@include($base_view.'list_berita')	
</div>
@endsection



@section('sidebar')
<div class="col-md-3">
@include('konten.frontend.auth.login')

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