<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="50px" class="text-center">No.</th>
			<th>Nama</th>
			<th width="150px" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no=$ref_perguruan_tinggi->firstItem(); ?>
@foreach($ref_perguruan_tinggi as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td class="text-center"> 
			{!! Action::rest_del(false, route("backend_ref_perguruan_tinggi.destroy", $list->id), $list->id); !!}
			||
				{!! Action::edit(false, route("backend_ref_perguruan_tinggi.edit", $list->id), $list->id) !!}
			</td>
		</tr>
		<?php $no++; ?>
@endforeach

	</tbody>
</table>

{!! $ref_perguruan_tinggi->render() !!}