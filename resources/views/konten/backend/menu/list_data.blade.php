<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="15px" class="text-center">No.</th>
			<th>Nama Menu</th>
			<th width="100px" class="text-center">Type</th>
			<th width="200px" class="text-center">link</th>
			<th width="100px" class="text-center">child menu</th>
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
			<td class="text-center">
				 <span class="label label-info">
				 	{!! count($list->mst_menu_child) !!}
				 </span>	
			</td>
			<td class="text-center"></td>
		</tr>
		@php($no++)
		@endforeach
	</tbody>
</table>

{!! $menu->render() !!}