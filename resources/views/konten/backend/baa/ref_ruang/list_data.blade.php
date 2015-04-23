<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="50px">No.</th>
			<th>Nama Ruang</th>
			<th>Kode Ruang</th>
			<th width="50px">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=$ref_ruang->firstItem(); ?>
@foreach($ref_ruang as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td>{!! $list->kode_ruang !!}</td>
			<td>
				{!! Action::edit(false, route("baa_ref_ruang.edit", $list->id), $list->id) !!}
				||
				{!! Action::rest_del(false, route("baa_ref_ruang.destroy", $list->id), $list->id); !!}				
			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>


{!! $ref_ruang->render() !!}