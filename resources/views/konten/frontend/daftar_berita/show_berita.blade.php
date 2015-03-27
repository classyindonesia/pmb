@extends('layouts.frontend')





@section('konten_utama')
	<div class="col-md-9">
	 
	 <a class="btn btn-primary pull-right" href="{!! route('daftar_berita.index') !!}">
		<i class='fa fa-arrow-left'></i> back
	</a>

	<h1>{!! $berita->judul !!}</h1>
	@include($base_view.'tgl_post')
	<hr>
	  {!! $berita->artikel !!}
	 	

	@if($berita->komentar == 1)

		@include($base_view.'komentar')
	@endif

	</div>
@endsection






@section('sidebar')
<div class="col-md-3">
@include('konten.frontend.auth.login')

</div>
@endsection






@section('disqus_close_tag')
 <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = '{!! env("DISQUS_SHORTNAME") !!}';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
@endsection