<h1>Latest News</h1>
<hr>
@foreach($berita as $list)

	<h4>{!! $list->judul !!}</h4>
	 {!! strip_tags($list->artikel) !!} 


<hr size="margin-top:1px;">
@endforeach