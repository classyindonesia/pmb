@extends('layouts.frontend')




@section('fb_share_open_tag')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&appId=165969263108&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection





@section('konten_utama')
	<div class="col-md-12">
	 
  	 <a class="btn btn-primary pull-right" href="{!! route('daftar_berita.index') !!}">
  		<i class='fa fa-arrow-left'></i> back
  	</a>

  	<h1>{!! $berita->judul !!}</h1>
  	@include($base_view.'tgl_post')
  	<hr>
       {!! $berita->artikel !!}
  
  @include($base_view.'lampiran_berita')


   <hr>
    <div class="fb-like" data-href="{!! URL::current() !!}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
  <hr>	 	

  	@if($berita->komentar == 1)

  		@include($base_view.'komentar')
  	@endif
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