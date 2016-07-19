<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="15px" class="text-center">No.</th>
			<th>Nama Menu</th>
			<th width="100px" class="text-center">Type</th>
			<th width="200px" class="text-center">link</th>
			@if(Request::segment(3) != 'child')
				<th width="100px" class="text-center">child menu</th>
			@endif
			<th width="100px" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
	@php($no=$menu->firstItem())
	@foreach($menu as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td class="text-center">{!! $list->c__is_internal !!}</td>
			<td>{!! $list->link !!}</td>
			@if(Request::segment(3) != 'child')
				<td class="text-center">
					<a href="{!! route('backend.menu.child', $list->id) !!}">
						 <span class="label label-info">
						 	{!! count($list->mst_menu_child) !!}
						 </span>	
					 </a>
				</td>
			@endif

			<td class="text-center">
				@include($base_view.'action')
			</td>
		</tr>
		@php($no++)
		@endforeach
	</tbody>
</table>

{!! $menu->render() !!}