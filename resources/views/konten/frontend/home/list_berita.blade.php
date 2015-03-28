<a class="btn btn-primary pull-right" href="{!! route('daftar_berita.index') !!}">
	<i class='fa fa-th-list'></i> daftar berita
</a>

<h3> <i class='fa fa-newspaper-o'></i> Latest News</h3>
<hr>
@foreach($berita as $list)

	<b style="font-weight:bold;"> <i class='fa fa-tags'></i> {!! $list->judul !!}</b> <br>
 
      {{ str_limit(strip_tags($list->artikel), $limit = 250, $end = '') }} 
        <a style='font-weight:bold;' class="label label-warning" href="{!! URL::route('daftar_berita.post', $list->slug) !!}">selengkapnya...</a>
<hr style="margin-top:0px;">
@endforeach