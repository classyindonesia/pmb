

<a class="btn btn-primary pull-right" href="{!! route('home.index') !!}">
	<i class='fa fa-arrow-left'></i> beranda
</a>


<h1><i class='fa fa-newspaper-o'></i> Daftar Berita</h1>


@include($base_view.'form_pencarian')


<hr>
@foreach($berita as $list)

	<h3 style="font-weight:bold;"> <i class='fa fa-tags'></i> {!! $list->judul !!}</h3>
 
      {{ str_limit(strip_tags($list->artikel), $limit = 250, $end = '') }} 
        <a style='font-weight:bold;' class="label label-warning" href="{!! URL::route('daftar_berita.post', $list->slug) !!}">selengkapnya...</a>
<hr size="margin-top:0px;">
@endforeach


{!! $berita->render() !!}