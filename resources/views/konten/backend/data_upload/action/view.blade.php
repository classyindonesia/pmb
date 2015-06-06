@if(Request::segment(3) == 'berkas')
	<i style='cursor:pointer;' data-toggle='tooltip' title='view' onClick='viewBerkas({!! $list->id !!})' class='fa fa-eye'></i>
@else
	<i style='cursor:pointer;' data-toggle='tooltip' title='view' onClick='viewFoto({!! $list->id !!})' class='fa fa-eye'></i>
@endif