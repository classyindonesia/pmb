<a class="btn btn-primary pull-right" href="{!! route('daftar_berita.index') !!}">
	<i class='fa fa-th-list'></i> daftar berita
</a>

<h1> <i class='fa fa-newspaper-o'></i> Latest News</h1>
<hr>
@foreach($berita as $list)

	<h3 style="font-weight:bold;"> <i class='fa fa-tags'></i> {!! $list->judul !!}</h3>
 
      {{ str_limit(strip_tags($list->artikel), $limit = 250, $end = '') }} 
        <a style='font-weight:bold;' class="label label-warning" href="{!! URL::route('daftar_berita.post', $list->slug) !!}">selengkapnya...</a>
<hr size="margin-top:0px;">
@endforeach