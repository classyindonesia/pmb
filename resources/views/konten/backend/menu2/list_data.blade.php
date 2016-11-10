<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="10px">No.</th>
			<th>Nama Menu</th>
			<th>url</th>
			<th> Keterangan</th>
			<th class="text-center" width="100px">Action</th>
		</tr>
	</thead>
	<tbody>
	@php($no = $menu2->firstItem())
	@foreach($menu2 as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td> 

			<i class="{!! $list->icon !!}"></i>  {!! $list->nama !!}

			</td>
			<td>{!! $list->url !!}</td>
			<td>{!! $list->keterangan !!}</td>
			<td class="text-center">
				@include($base_view.'action')
			</td>
		</tr>
		@php($no++)
	@endforeach
	</tbody>
</table>