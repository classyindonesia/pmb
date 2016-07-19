@if(Request::segment(3) == 'child')
	<a style="margin-left:1em;" class="btn btn-info pull-right" href="{!! route('backend.menu.index') !!}">
		<i class='fa fa-arrow-left'></i> back
	</a>
@endif